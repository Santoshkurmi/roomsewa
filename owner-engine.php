<?php
// include("navbar.php");
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';
require './vendor/phpmailer/phpmailer/src/Exception.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';
require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
$owner_id = '';
$full_name = '';
$email = '';
$password = '';
$phone_no = '';
$address = '';
$id_type = '';
$id_photo = '';

$errors = array();

include("./config/config.php");
include("./config/bcrypt.php");


if (isset($_POST['owner_register'])) {
    owner_register();
}

if (isset($_POST['owner_login'])) {
    owner_login();
}

function owner_register()
{
    if (isset($_FILES['id_photo'])) {
        $id_photo = 'owner-photo/' . $_FILES['id_photo']['name'];

        // echo $_FILES['image']['name'].'<br>';

        if (!empty($_FILES['id_photo'])) {
            $path = "owner-photo/";
            $path = $path . basename($_FILES['id_photo']['name']);
            if (move_uploaded_file($_FILES['id_photo']['tmp_name'], $path)) {
                echo "The file " . basename($_FILES['id_photo']['name']) . " has been uploaded";
            } else {
                echo "There was an error uploading the file, please try again!";
            }
        }
    }
    global $owner_id, $full_name, $email, $password, $phone_no, $address, $id_type, $id_photo, $errors, $db, $verification_code, $email_verified_at;
    //  $owner_id = validate($_POST['owner_id']);
    $full_name = validate($_POST['full_name']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $phone_no = validate($_POST['phone_no']);
    $address = validate($_POST['address']);
    $id_type = validate($_POST['id_type']);
    $id_photo = $path;
    $hashedPassword = hashPassword($password); // Encrypt password

    $mysql = "SELECT * FROM owner WHERE email = '$email'";
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

            // insert in users table
            $sql = "INSERT INTO owner (full_name, email, password, phone_no, address, id_type, id_photo, verification_code, email_verified_at) VALUES ('$full_name', '$email', '$hashedPassword', '$phone_no', '$address', '$id_type', '$id_photo', '$verification_code', NULL)";

            mysqli_query($db, $sql);

            header("Location: email-verification-owner.php?email=" . $email);
            exit();
        } catch (Exception $e) {
            echo "Something wrong";
        }
    } else {
        echo "Email " . $email . " already Exists.";
    }
}



function owner_login()
{
    global $email, $db;
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    // Hash the entered password using bcrypt
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $sql = "SELECT * FROM owner where email='$email' LIMIT 1";

    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);



        // Verify the entered password with the hashed password from the database
        if (password_verify($password, $row['password'])) {
            if ($row['email_verified_at'] == null) {
                die("Please verify your email <a href='email-verification-owner.php?email=" . $email . "'>from here</a>");
            }
            $_SESSION['email'] = $email;
            echo '<script>window.location.href ="./owner/owner-index.php";</script>';

            
   
        } else {
            // Incorrect password
            displayLoginError("Incorrect Password");
        }
    } else {
        // Email not found
        displayLoginError("Incorrect Email or not registered.");
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
            <strong>$message</strong> Click here to <a href="owner-register.php" style="color: lightblue;"><b>Register</b></a>.
        </div>
    </div>
HTML;
}


function validate($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
