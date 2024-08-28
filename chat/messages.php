<?php
// session_start();


include './navbar.php';
include '../config/config.php';
$usemail=$_SESSION['email'];
?>
<h2>Choose To Reply</h2>
<?php
// echo $usemail;

// $messagesql= "SELECT * from messages where (sender_id=4 and receiver_id=31) or( sender_id=31 and receiver_id=4);";

// $messageresult= mysqli_query($db, $messagesql);
// if(!$messageresult){
//     echo"No message found";
//     return;
// }
// while($row=mysqli_fetch_array($messageresult)){

//     print_r($row);  
// }

// $messagesql= "SELECT DISTINCT 
//     CASE 
//         WHEN sender_id = 31 AND sendertype = 'tenant' THEN receiver_id
//         WHEN receiver_id = 31 AND receivertype = 'tenant' THEN sender_id
//     END AS person_id,
//     CASE 
//         WHEN sender_id = 31 AND sendertype = 'tenant' THEN receivertype
//         WHEN receiver_id = 31 AND receivertype = 'tenant' THEN sendertype
//     END AS person_type
// FROM messages
// WHERE (sender_id = 31 AND sendertype = 'tenant')
//    OR (receiver_id = 31 AND receivertype = 'tenant');";
// $messageresult= mysqli_query($db, $messagesql);
// if(!$messageresult){
//     echo"No message found";
//     return;
// }


// while($row=mysqli_fetch_array($messageresult)){

   
   
//     $owner_id=$row[ "person_id"];
//     // echo"$owner_id";
//     $sqll="Select * from owner where owner_id='$owner_id';";
//     $result=mysqli_query($db, $sqll);
//     if(!$result){
        
//     }
//     else{
//         while($owner=mysqli_fetch_array($result)){
//             $ownername=$owner["full_name"];
//             echo"<a href='./index.php'>$ownername</a>;";

//         }
//     }
// }


global $sender_id,$receiver_name;
$sql="SELECT * from tenant where email='$usemail';";
$result= mysqli_query($db,$sql);
if($result){
    $row=mysqli_fetch_assoc($result);
    $sender_id=$row['tenant_id'];
    // echo $sender_id;
}
$sql1="SELECT DISTINCT sender_id from messages where receiver_id='$sender_id';";
$result1=mysqli_query($db,$sql1);
if(mysqli_num_rows($result1)>0){
    while($row1=mysqli_fetch_assoc($result1)){
        $receiver_id= $row1['sender_id'];
        //echo $receiver_id;
        $sql2="SELECT * from owner where owner_id='$receiver_id';";
        $result2=mysqli_query($db,$sql2);
        if($result2){
            $row2=mysqli_fetch_assoc($result2);
            if($row2!==null)
            $receiver_name=$row2['full_name'];
            }
            
            
        
        if (!empty($receiver_name)) {
                ?>
                
                <div class="receiverList">
                    <div class="receiverName">
                        <form action="./index.php" method="post">
                            <input type="hidden" name="sender_id" value="<?php echo $sender_id; ?>">
                            <input type="hidden" name="receiver_id" value="<?php echo $receiver_id; ?>">
                            <input type="hidden" name="receiver_name" value="<?php echo htmlspecialchars($receiver_name); ?>">
                            <input type="submit" class="btn btn-lg btn-success" name="send_message" style="width: 100%" value="<?php echo htmlspecialchars($receiver_name); ?>">
                        </form>
                    </div>
                </div>
                <?php
            } // End i
    }
}
?>

