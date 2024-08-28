<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// require '../admin/autoload.php';
require '../vendor/autoload.php';
include "../config/bcrypt.php";
include "../config/config.php";
$admin_id = '';
$email = '';
$password = '';

$errors = array();

if (isset($_POST['admin_login'])) {
    admin_login();
}
if (isset($_POST['admin_register'])) {
    admin_register();
}

function admin_login()
{
    global $email, $db;
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $sql = "SELECT * FROM admin where email='$email' LIMIT 1";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify the entered password with the hashed password from the database
        if (password_verify($password, $row['password'])) {
            if ($row['email_verified_at'] == null) {
                die("Please verify your email <a href='email-verification-admin.php?email=" . $email . "'>from here</a>");
            }
            $_SESSION['email'] = $email;
            echo '<script>window.location.href = "index.php";</script>';
        } else {
            // Incorrect password
            displayLoginError("Incorrect Email/Password or not registered.");
        }
    } else {
        // Email not found
        displayLoginError("Incorrect Email/Password or not registered.");
    }
}
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
            <strong>$message</strong> Click here to <a href="admin-register.php" style="color: lightblue;"><b>Register</b></a>.
        </div>
    </div>
HTML;
}
function admin_register()
{
    global $admin_id, $full_name, $email, $password, $errors, $db, $verification_code, $email_verified_at,$otp_created_at,$resetOtp;
    //  $owner_id = validate($_POST['owner_id']);
    $full_name = validate($_POST['full_name']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $hashedPassword = hashPassword($password); // Encrypt password

    $mysql = "SELECT * FROM admin WHERE email = '$email'";
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
            $sql = "INSERT INTO admin (full_name, email, password,verification_code, email_verified_at,resetOtp) VALUES ('$full_name', '$email', '$hashedPassword', '$verification_code', NULL,NULL)";

            mysqli_query($db, $sql);

            header("Location: email-verification-admin.php?email=" . $email);
            exit();
        } catch (Exception $e) {
            echo "Something wrong";
        }
    } else {
        echo "Email " . $email . " already Exists.";
    }
}


function validate($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
