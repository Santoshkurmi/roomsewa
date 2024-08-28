<?php
session_start();
if (isset($_SESSION['email'])) {
    $uemail = $_SESSION['email'];
    //echo $uemail;
    include './navbar.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Chat</title>
    <style>
        #chat-container {
            height: 300px;
            overflow-y: scroll;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }

        #message-input {
            width: calc(100% - 80px);
            padding: 5px;
            margin-right: 10px;
        }

        button {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .user1 {
            color: blue;
            /* background-color: lightblue; */
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }

        .user2 {
            color: green;
            /* background-color: lightgreen; */
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <?php
    include ("../../config/config.php");

    global $tenant_id,$owner_id,$sender_name,$receiver_name,$sender_id,$receiver_id;
        if (isset($_POST['send_message'])) {
            $sender_id = $_POST['sender_id'];
            //echo $sender_id;
            $receiver_id = $_POST['receiver_id'];
            //echo $receiver_id;
        }
        $sql= "SELECT full_name from owner where owner_id='$sender_id';";
        $result=mysqli_query($db,$sql);
        if($result){
            $row=mysqli_fetch_assoc($result);
            // $sender_name=$row['full_name'];
            // echo $sender_name;
        }
        $sql1= "SELECT full_name from tenant where tenant_id='$receiver_id';";
        $result1=mysqli_query($db,$sql1);
        if($result1){
            $row1=mysqli_fetch_assoc($result1);
            // $receiver_name=$row1['full_name'];
            // echo $receiver_name;
        }
       
    ?>
        <div id="chat-container">
            <!-- Chat messages will be displayed here -->
        </div>
        <input type="text" id="message-input" placeholder="Type your message...">
        <button onclick="sendMessage()">Send</button>
        <script>
        
            function sendMessage() {
                let messageContent = $('#message-input').val();
                let senderId = <?php echo $sender_id; ?> ;
                let receiverId = <?php echo $receiver_id; ?> ;

                // Prepare data to send to the server
                let data = {
                    senderId: senderId,
                    receiverId: receiverId,
                    messageContent: messageContent
                };

                // Send message to server using AJAX
                $.ajax({
                    type: 'POST',
                    url: 'send_message.php',
                    data: JSON.stringify(data),
                    contentType: 'application/json',
                    success: function(response) {
                        // This function is called if the AJAX call is successful
                        //console.log(response); // Log the response from the server
                        //alert(response); // Display an alert with the response message
                        // You can perform additional actions here based on the response
                        $('#message-input').val(''); // Clear message input field
                        getChatHistory(); // Refresh chat history
                    },
                    error: function(xhr, status, error) {
                        // This function is called if the AJAX call encounters an error
                        console.error('Error sending message:', error);
                        // You can handle the error here, such as displaying an error message to the user
                    }
                });
            }


            // Function to retrieve chat history
            function getChatHistory() {
               
                let senderID = <?php echo $sender_id; ?>;
                let receiverID = <?php echo $receiver_id; ?>;

                // Prepare data to send to the server
                let data = {
                    userId1: senderID,
                    userId2: receiverID
                };

                // Send request to server to fetch chat history using AJAX
                $.ajax({
                    type: 'POST',
                    url: 'get_chat_history.php',
                    data: JSON.stringify(data),
                    contentType: 'application/json',
                    success: function(response) {
                        console.log('Hy' + response);
                        try{
                        response = JSON.parse(response);
                        if (response) {
                            let chatHistory = response.chatHistory;
                            displayChatHistory(chatHistory); // Display chat history
                        } else {
                            console.error('Error fetching chat history:', response.error);
                        }
                        }
                        catch(error){
                            console.error(error);
                        }
                        

                    },
                    error: function(xhr, status, error) {
                        console.log('Response:', response);

                        // Handle AJAX errors
                        console.error('AJAX Error:', error);
                    }
                });
            }

            function displayChatHistory(chatHistory) {
                let senderId = <?php echo $sender_id; ?> 
                let receiverId = <?php echo $receiver_id; ?> 
                let senderName='<?php echo $sender_name; ?>'
                let receiverName= '<?php echo $receiver_name; ?>'
                let chatContainer = $('#chat-container');
                chatContainer.empty(); // Clear existing chat messages

                $.each(chatHistory.messages, function(index, message) {
                    if(message.sender_id==senderId){
                    let messageElement = $('<div>').addClass('user1').text(senderName + ': ' + message.message_content);
                    chatContainer.append(messageElement);
                    }
                    else if(message.sender_id==receiverId){
                        let messageElement = $('<div>').addClass('user2').text(receiverName + ': ' + message.message_content);
                    chatContainer.append(messageElement);  
                    }
                });

                // Scroll to the bottom of the chat container
                chatContainer.scrollTop(chatContainer[0].scrollHeight);
            }




            // Call getChatHistory function when the page loads
            $(document).ready(function() {
                getChatHistory();
            });
        </script>

</body>

</html>