<?php
// session_start();
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';
require './vendor/phpmailer/phpmailer/src/Exception.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';
require './vendor/phpmailer/phpmailer/src/PHPMailer.php';


$tenant_id = '';
$full_name = '';
$email = '';
$password = '';
$phone_no = '';
$address = '';
$id_type = '';
$id_photo = '';

$errors = array();

include './config/config.php';
include './config/bcrypt.php';

if (isset($_POST['tenant_register'])) {
  tenant_register();
}
if (isset($_POST['tenant_login'])) {
  tenant_login();
}
if (isset($_POST['tenant_update'])) {
  tenant_update();
}


function tenant_register()
{
   // Array to store error messages
  $errors=[];

  if (isset($_FILES['id_photo'])) {

    // Define allowed file types and maximum size (5MB)
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    $max_size = 5 * 1024 * 1024; // 5MB in bytes

    // Get file properties
    $file_type = mime_content_type($_FILES['id_photo']['tmp_name']);
    $file_size = $_FILES['id_photo']['size'];

    // Check if the file type is allowed
    if (!in_array($file_type, $allowed_types)) {
      $errors['id_photo'] =  "Invalid file type. Only JPG, JPEG, PNG, and GIF formats are allowed.";
    }
    // Check if the file size exceeds the maximum size
    elseif ($file_size > $max_size) {
      $errors['id_photo'] = "File size exceeds the 5MB limit.";
    }
    // If file is valid, proceed with the upload
    else {
        $id_photo = 'tenant-photo/' . microtime() . $_FILES['id_photo']['name'];
        $path = "tenant-photo/";
        $path = $path . basename($_FILES['id_photo']['name']);

        // Attempt to move the uploaded file
        if (move_uploaded_file($_FILES['id_photo']['tmp_name'], $path)) {
            echo "The file " . basename($_FILES['id_photo']['name']) . " has been uploaded.";
        } else {
          $errors['id_photo'] = "There was an error uploading the file, please try again!";
        }
    }
}

// Display other error messages if necessary
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo '<div style="color: red;">' . $error . '</div>';
    }
}




  global $tenant_id, $full_name, $email, $password, $phone_no, $address, $id_type, $id_photo, $errors, $db, $email_verified_at, $verification_code;
    //  $tenant_id = validate($_POST['tenant_id']);
  $full_name = validate($_POST['full_name']);
  $email = validate($_POST['email']);
  $password = validate($_POST['password']);
  $phone_no = validate($_POST['phone_no']);
  $address = validate($_POST['address']);
  $id_type = validate($_POST['id_type']);
  // $id_photo = $path;
  $hashedPassword = hashPassword($password);
  $location = $_POST['location'];
  // Split the location string to get latitude and longitude
  echo 'The location  from where tenant has registered is:'. $location ;
  //    list($latitude, $longitude) = explode(",", $location);



  $mysql = "SELECT * FROM tenant WHERE email = '$email'";
  $res = mysqli_query($db, $mysql);
  // Fetch the result as an associative array
  // $row = $res->fetch_assoc();

  // Extract the count value
  $emailCount = mysqli_num_rows($res);
  if ($emailCount == 0) {

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
      $mail->addAddress($email, $full_name);

      //Set email format to HTML
      $mail->isHTML(true);

      $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

      $mail->Subject = 'Email verification';
      $mail->Body = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';



      $mail->send();

      //       // Existing code...
      // Insert into the tenant table
      $sql = "INSERT INTO tenant (full_name, email, password, phone_no, address, id_type, id_photo, verification_code, email_verified_at) VALUES ('$full_name', '$email', '$hashedPassword', '$phone_no', '$address', '$id_type', '$id_photo', '$verification_code', NULL)";
      mysqli_query($db, $sql);

      // Send headers after all the processing is done
      // header("Location: ./email-verification.php");
      header("Location: email-verification.php?email=" . $email);

      exit();

    } catch (Exception $e) {
      echo "Something went wrong";
    }
  } else {
    

    echo "<br> Email " . $email . " is already exists. Please register by new email account";
  }
  
}

function tenant_login()
{
  global $db;
  $email = validate($_POST['email']);
  $password = validate($_POST['password']);

  // Hash the entered password using bcrypt
  $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

  $sql = "SELECT * FROM tenant where email='$email' LIMIT 1";
  $result = mysqli_query($db, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Verify the entered password with the hashed password from the database

    if (password_verify($password, $row['password'])) {
      if ($row['email_verified_at'] == null) {
        die("Please verify your email <a href='email-verification.php?email=" . $email . "'>from here</a>");
      }
      $_SESSION['email'] = $email;
      echo '<script>window.location.href ="index.php";</script>';
    } else {
      // Incorrect password
      displayLoginError("Password is incorrect.Please enter a valid matching password to your email");
    }
  } else {
    // Email not found
    displayLoginError("Email is not verified.Please verify your email then proceed to login");
  }
}

// Helper function to display login error message
function displayLoginError($message)
{
  echo <<<HTML
    <style>
        .alert {
            padding: 20px;
            background-color: #DC143C;
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
    <div class="container">
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>$message</strong>
        </div>
    </div>
HTML;
}

function tenant_update()
{
    global $tenant_id, $full_name, $email, $password, $phone_no, $address, $id_type, $id_photo, $errors, $db;
    $tenant_id = validate($_POST['tenant_id']);
    $full_name = validate($_POST['full_name']);
    $email = validate($_POST['email']);
    $phone_no = validate($_POST['phone_no']);
    $address = validate($_POST['address']);
    $id_type = validate($_POST['id_type']);
    $password = md5($password); // Encrypt password
    $sql = "UPDATE tenant SET full_name='$full_name',email='$email',phone_no='$phone_no',address='$address',id_type='$id_type' WHERE tenant_id='$tenant_id'";
    $query = mysqli_query($db, $sql);
    if (!empty($query)) {
        ?>

        <style>
            .alert {
                padding: 20px;
                background-color: #DC143C;
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
                <center><strong>Your Information has been updated.</strong></center>
            </div>
        </div>


        <?php
    }
}


function validate($data)
{
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
