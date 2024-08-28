<?php
// include("navbar.php");
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';


include("config/config.php");

if (isset($_POST['book_property'])) {


  if (isset($_SESSION["email"])) {
    global $db, $property_id;
    $u_email = $_SESSION["email"];
    $property_id = $_GET['property_id'];

   
$sql_property = "SELECT owner_id FROM add_property WHERE property_id='$property_id'";
$query_property = mysqli_query($db, $sql_property);
$property_data = mysqli_fetch_assoc($query_property);
$owner_id = $property_data['owner_id'];

echo "Owner ID: " . $owner_id;


    $sql = "SELECT * FROM tenant where email='$u_email'";
    $query = mysqli_query($db, $sql);

    if (mysqli_num_rows($query) > 0) {
      while ($rows = mysqli_fetch_assoc($query)) {
        $tenant_id = $rows['tenant_id'];
        $sql1 = "UPDATE add_property SET booked='Yes' WHERE property_id='$property_id'";
        $query1 = mysqli_query($db, $sql1);

        $sql2 = "INSERT INTO booking(property_id,tenant_id,owner_id) VALUES ('$property_id','$tenant_id','$owner_id')";
        $query2 = mysqli_query($db, $sql2);

        if ($query2) {

          $email = $rows['email'];
          $msg = "Thankyou Mr/Ms " . $rows['full_name'] . " for booking Property. Please visit the property location to view it personally.";
          $recipient = $email;
          $subject = "Property Booked";
    

          //mail send
          //     //Instantiation and passing true enables exceptions
          $mail = new PHPMailer(true);
          try {
              //        //Enable verbose debug output
              $mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER;
  
              //Send using SMTP
              $mail->isSMTP();
  
              //Set the SMTP server to send through
              $mail->Host = 'smtp.gmail.com';
  
              //Enable SMTP authentication
              $mail->SMTPAuth = true;
  
              //SMTP username
              $mail->Username = 'sunilbhattarai131@gmail.com';
  
              //SMTP password
              $mail->Password = 'klxtbsqydwcoouor';
  
              //Enable TLS encryption;
              $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  
              //TCP port to connect to, use 465 for PHPMailer::ENCRYPTION_SMTPS above
              $mail->Port = 587;
  
              //Recipients
              $mail->setFrom("sunilbhattarai131@gmail.com");
  
              //Add a recipient
              $mail->addAddress($email);
  
              //Set email format to HTML
              $mail->isHTML(true);

  
              $mail->Subject = $subject;
              $mail->Body = $msg;
  
  
  
              $mail->send();
            } 
            catch (Exception $e) {
              echo "Something wrong";
          }
          
      }
  

          ?>


          <style>
            .alert {
              padding: 20px;
              background-color: #5cb85c;
              color: white;
            }

            .closebtn {
              margin-left: 15px;
              color: white;
              font-weight: bold;
              float: right;
              font-size: 22px;
              line-height: 20px;
              cursor: pointer;
              transition: 0.3s;
            }

            .closebtn:hover {
              color: black;
            }
          </style>
          <script>
            window.setTimeout(function () {
              $(".alert").fadeTo(1000, 0).slideUp(500, function () {
                $(this).remove();
              });
            }, 2000);
          </script>
          <div class="container">
            <div class="alert" role='alert'>
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
              <center><strong>Thankyou for booking this property.</strong></center>
            </div>
          </div>



          <?php





        }



      }




    }
  }


?>