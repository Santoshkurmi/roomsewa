<?php
// Function to retrieve chat history
function getChatHistory($userId1, $userId2) {
    include("../config/config.php");

    $sql = "SELECT sender_id, message_content, time FROM messages WHERE (sender_id = '$userId1' AND receiver_id = '$userId2') OR (sender_id = '$userId2' AND receiver_id = '$userId1') ORDER BY time ASC"; 

    $result = mysqli_query($db, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $messages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $messages[] = array(
                'sender_id' => $row['sender_id'],
                'message_content' => $row['message_content'],
                'time' => $row['time']
            );
        }
        return array('messages' => $messages);
    } else {
        return []; // Return empty array if query fails
    }
}

// Call the getChatHistory function if POST data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    if (isset($data['userId1']) && isset($data['userId2'])) {
        $userId1 = $data['userId1'];
        $userId2 = $data['userId2'];
        
        $chatHistory = getChatHistory($userId1, $userId2);
        
        // Return the chat history as JSON
        echo json_encode(array(
            'chatHistory' => $chatHistory
        ));
    } else {
        // Return an error message as JSON
        echo json_encode(array(
            'error' => 'Incomplete data received'
        ));
    }
}

