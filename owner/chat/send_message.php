<?php


function sendMessage($senderId, $receiverId, $messageContent) {
    include("../../config/config.php");
    $senderId = mysqli_real_escape_string($db, $senderId);
    $receiverId = mysqli_real_escape_string($db, $receiverId);
    $messageContent = mysqli_real_escape_string($db, $messageContent);
    
    $sql = "INSERT INTO messages (sender_id, receiver_id, message_content,time) VALUES ('$senderId', '$receiverId', '$messageContent',NOW())";
    if (mysqli_query($db, $sql)) {
        echo "Message sent successfully";
    } else {
        echo "Error: " . mysqli_error($db);
    }
}

// Call the sendMessage function if POST data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    if (isset($data['senderId']) && isset($data['receiverId']) && isset($data['messageContent'])) {
        $senderId = $data['senderId'];
        $receiverId = $data['receiverId'];
        $messageContent = $data['messageContent'];
        
        sendMessage($senderId, $receiverId, $messageContent);
    } else {
        echo "Error: Incomplete data received";
    }
}
?>
