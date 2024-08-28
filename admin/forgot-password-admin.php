<?php
include("./navbar.php");

date_default_timezone_set('ASIA/KATHMANDU');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';
include("../config/config.php");
include("../config/bcrypt.php");

// Initially, set the step to 1 (Enter Email)
$step = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["sendOTP"])) {
        // Step 1: Enter Email
        $email = $_POST["email"];
        $mySql = "SELECT COUNT(email) FROM admin WHERE email = '$email'";
        $res = mysqli_query($db, $mySql);
        $row = $res->fetch_assoc();
        $emailCount = $row['COUNT(email)'];

        if ($emailCount == 1) {
            $myquery = "select admin_id as id from admin where email='$email'";
            $res1 = mysqli_query($db, $myquery);
            $row1 = $res1->fetch_assoc();
            $admin_id = $row1['id'];

            //Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Enable verbose debug output
                $mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER;

                //Send using SMTP
                $mail->isSMTP();

                //Set the SMTP server to send through
                $mail->Host = 'smtp.gmail.com';

                //Enable SMTP authentication
                $mail->SMTPAuth = true;

                //SMTP username
                $mail->Username = 'ssxetri7@gmail.com';

                //SMTP password
                $mail->Password = 'ovyisdasqpiwacua';

                //Enable TLS encryption;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

                //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                $mail->Port = 587;

                //Recipients
                $mail->setFrom('ssxetri7@gmail.com', 'simplirentrps');

                //Add a recipient
                $mail->addAddress($email);

                //Set email format to HTML
                $mail->isHTML(true);

                $otp = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
                $hashedOtp=hashPassword($otp);
                $mail->Subject = 'Reset Your Password';
                $mail->Body = '<p>Your OTP for Password Reset is: <b style="font-size: 30px;">' . $otp . '</b></p>';

                $mail->send();

                $sql = "Update admin set resetOtp='$hashedOtp' where admin_id='$admin_id'";
                mysqli_query($db, $sql);

                // Move to step 2 (Enter OTP)
                $step = 2;
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    } elseif (isset($_POST["verifyOTP"])) {
        // Step 2: Enter OTP
        $email = $_POST["email"];
        $userEnteredOTP = $_POST["userEnteredOTP"];
        $sql = "select resetOtp as otp from admin where email='$email'";
        $result = mysqli_query($db, $sql);
        $row = $result->fetch_assoc();
        $otpFromDB = $row['otp'];

        if (verifyPassword($userEnteredOTP,$otpFromDB)){
            // Move to step 3 (Set New Password)
            $step = 3;
        } else {
            echo '<div style="margin-top: 20px;" class="alert alert-danger" role="alert">
                    Incorrect OTP. Please try again.
                </div>';
        }
    } elseif (isset($_POST["resetPassword"])) {
        // Step 3: Set New Password
        $email = $_POST["email"];
        $newPassword = hashPassword($_POST["newPassword"]);

        $sql = "UPDATE admin SET password = '$newPassword', resetOtp = NULL WHERE email = '$email'";
        mysqli_query($db, $sql);

         echo '<div style="margin-top: 20px;" class="alert alert-success" role="alert">
                 Password reset successfully. You can now log in with your new password.
             </div>';
             echo '<script>window.location.href = "admin-login.php";</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <title>Password Reset</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .reset-container {
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
        }
        /* Initially hide the step2 and step3 */
        #step2, #step3 {
            display: none;
        }
    </style>
</head>
<body>

<div class="container reset-container">
    <h2 class="text-center mb-4">Reset Your Password From Here</h2>

    <?php
    if ($step == 1) {
        // Step 1: Enter Email
        ?>
        <form method="post">
            <div class="form-group">
                <label for="email">Enter your Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <button type="submit" name="sendOTP" class="btn btn-primary btn-block">Send OTP</button>
        </form>
        <?php
    } elseif ($step == 2) {
        // Step 2: Enter OTP
        ?>
        <form method="post" >
            <div class="form-group">
                <label for="otp">Enter OTP sent to your email:</label>
                <input type="text" class="form-control" name="userEnteredOTP" required>
            </div>
            <input type="hidden" name="email" value="<?= $email ?>">
            <button type="submit" name="verifyOTP" class="btn btn-primary btn-block">Verify OTP</button>
        </form>
        <?php
    } elseif ($step == 3) {
        // Step 3: Set New Password
        ?>
        <form method="post" >
            <div class="form-group">
                <label for="newPassword">Enter New Password:</label>
                <input type="password" class="form-control" name="newPassword" required>
            </div>
            <input type="hidden" name="email" value="<?= $email ?>">
            <button type="submit" name="resetPassword" class="btn btn-success btn-block">Reset Password</button>
        </form>
        <?php
    }
    ?>
</div>

</body>
</html>
