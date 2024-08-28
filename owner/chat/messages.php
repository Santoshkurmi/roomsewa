
<?php
session_start();
include("./navbar.php");

include("../../config/config.php");
$usemail=$_SESSION['email'];
?>
<h2>Choose To Reply</h2>
<?php
//echo $usemail;
global $sender_id,$receiver_name;
$sql="SELECT * from owner where email='$usemail';";
$result= mysqli_query($db,$sql);
if($result){
    $row=mysqli_fetch_assoc($result);
    $sender_id=$row['owner_id'];
    //echo $sender_id;
}
$sql1="SELECT DISTINCT sender_id from messages where receiver_id='$sender_id';";
$result1=mysqli_query($db,$sql1);
if(mysqli_num_rows($result1)>0){
    while($row1=mysqli_fetch_assoc($result1)){
        $receiver_id= $row1['sender_id'];
        //echo $receiver_id;
        $sql2="SELECT * from tenant where tenant_id='$receiver_id';";
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

