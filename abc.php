<?php
session_start();
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style/register.css" class="css">
    <style>
        .error {
            color: #FF0000;
        }
    </style>

</head>

<body>
    <?php
     // Define variables and set to empty values
     $nameErr = $emailErr = $passwordErr = $confirmPasswordErr = $phoneErr = $addressErr = $idPhotoErr = "";
     $name = $email = $password = $confirmPassword = $phone = $address = $idPhoto = "";

 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
            // Name validation
            if (empty($_POST["full_name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["full_name"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameErr = "Only letters and white space allowed";
                }
            }



             // Email validation
             if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

                   // Password validation
        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = test_input($_POST["password"]);
            if (strlen($password) < 8) {
                $passwordErr = "Password must be at least 8 characters long";
            }
        }

                // Confirm Password validation
                if (empty($_POST["password2"])) {
                    $confirmPasswordErr = "Please confirm your password";
                } else {
                    $confirmPassword = test_input($_POST["password2"]);
                    if ($password !== $confirmPassword) {
                        $confirmPasswordErr = "Passwords do not match";
                    }
                }
        
                // Phone number validation
                if (empty($_POST["phone_no"])) {
                    $phoneErr = "Phone number is required";
                } else {
                    $phone = test_input($_POST["phone_no"]);
                    if (!preg_match("/^\d{10}$/", $phone)) {
                        $phoneErr = "Phone number must be 10 digits";
                    }
                }

                      // Address validation
        if (empty($_POST["address"])) {
            $addressErr = "Address is required";
        } else {
            $address = test_input($_POST["address"]);
            if (!preg_match("/^[a-zA-Z\s.,'-]*$/", $address)) {
                $addressErr = "Address must only contain letters, spaces, and special characters (.,'-)";
            }
        }
                // ID Photo validation
                if (empty($_FILES["id_photo"]["name"])) {
                    $idPhotoErr = "ID Photo is required";
                } else {
                    $idPhoto = $_FILES["id_photo"]["name"];
                    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
                    $file_extension = pathinfo($idPhoto, PATHINFO_EXTENSION);
                    if (!in_array($file_extension, $allowed_extensions)) {
                        $idPhotoErr = "Only image files (jpg, jpeg, png, gif) are allowed";
                    }
                }
               
                }
                
              
            

            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

    
   
    ?>

    <div class="container">
        <h3 style="font-weight: bold; text-align: center;">Tenant Register</h3>
        <hr><br>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
            enctype="multipart/form-data">
            <input type="hidden" id="location" name="location" value="">


            <div class="form-group">
                <label for="full_name">Full Name:</label>
                <input type="text" class="form-control" id="full_name" placeholder="Enter Full Name" name="full_name"
                >
                <span id="name-icon" class="icon"><i class="fas fa-circle-check"></i><i
                        class="fas fa-circle-exclamation"></i></span>
                <!-- <span id="name-message" class="message"></span> -->
                <span class="error"><?php echo $nameErr;?></span>
             
            </div>


            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" >
                <span id="email-icon" class="icon"><i class="fas fa-circle-check"></i><i
                        class="fas fa-circle-exclamation"></i></span>
                <!-- <span id="email-message" class="message"></span> -->
                <span class="error"><?php echo $emailErr;?></span>

            </div>


            <div class="form-group">
                <label for="password1">Password:</label>
                <input type="password" class="form-control" id="password1" placeholder="Enter Password" name="password"
                    >
                <i class="toggle-password fas fa-eye-slash" onclick="togglePasswordVisibility('password1')"></i>
                <span id="password-icon" class="icon"><i class="fas fa-circle-check"></i><i
                        class="fas fa-circle-exclamation"></i></span>
                <div id="password-strength" class="message"></div>
                <!-- <span id="password-message" class="message"></span> -->
                <span class="error"><?php echo $passwordErr;?></span>
                <br>
            </div>

            <div class="form-group">
                <label for="password2">Confirm Password:</label>
                <input type="password" class="form-control" id="password2" placeholder="Enter Password Again"
                    name="password2" >
                <i class="toggle-password fas fa-eye-slash" onclick="togglePasswordVisibility('password2')"></i>
                <span id="confirm-password-icon" class="icon"><i class="fas fa-circle-check"></i><i
                        class="fas fa-circle-exclamation"></i></span>
                <!-- <span id="confirm-password-message" class="message"></span> -->
                <span class="error"><?php echo $confirmPasswordErr;?></span>
            </div>



            <div class="form-group">
                <label for="phone_no">Phone No.:</label>
                <input type="text" class="form-control" id="phone_no" placeholder="Enter Phone No." name="phone_no"
                    >
                <span id="phone-icon" class="icon"><i class="fas fa-circle-check"></i><i
                        class="fas fa-circle-exclamation"></i></span>
                <!-- <span id="phone-message" class="message"></span> -->
                <span class="error"><?php echo $phoneErr;?></span>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address"
                    >
                <span id="address-icon" class="icon"><i class="fas fa-circle-check"></i><i
                        class="fas fa-circle-exclamation"></i></span>
                <!-- <span id="address-message" class="message"></span> -->
                <span class="error"><?php echo $addressErr;?></span>

            </div>

            <div class="form-group">
                <label for="id_type">Type of ID:</label>
                <select class="form-control" name="id_type">
                    <option>Citizenship</option>
                    <option>Driving Licence</option>
                </select>
            </div>

            <div class="form-group">
                <label for="card_photo">Upload your Selected Card:</label>
                <input type="file" class="form-control" placeholder="Upload id photo" name="id_photo" accept="image/*"
                    onchange="preview_image(event)" >
                    <span class="error"><?php echo $idPhotoErr;?></span>
            </div>


            <div class="form-group">
                <label>Your selected File:</label><br>
                <img src="" id="output_image" alt="Selected File" height="100px" >
            </div>
            <hr>
            <button id="submit" name="tenant_register" class="btn btn-primary btn-block"
                onclick="return Validate()">Register</button><br>
            <div class="form-group text-right">
                <label class="">Register as a <a href="owner-register.php">Owner</a>?</label><br>
            </div><br><br>
        </form>
    </div>

    <!-- Font Awesome CDN link -->
    <script href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="./script/register.js"></script>


</body>

<br><br>
<?php
include 'footer.php';

?>

</html>