<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style/register.css" class="css">

</head>

<body>
    <div class="container">
        <h3 style="font-weight: bold; text-align: center;">Tenant Register</h3>
        <hr><br>
        <form method="POST" action="tenant-engine.php" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
            enctype="multipart/form-data">
            <input type="hidden" id="location" name="location" value="">


            <div class="form-group">
                <label for="full_name">Full Name:</label>
                <input type="text" class="form-control" id="full_name" placeholder="Enter Full Name" name="full_name"
                    required>
                <span id="name-icon" class="icon"><i class="fas fa-circle-check"></i><i
                        class="fas fa-circle-exclamation"></i></span>
                <span id="name-message" class="message"></span>
            </div>


            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
                <span id="email-icon" class="icon"><i class="fas fa-circle-check"></i><i
                        class="fas fa-circle-exclamation"></i></span>
                <span id="email-message" class="message"></span>
            </div>


            <div class="form-group">
                <label for="password1">Password:</label>
                <input type="password" class="form-control" id="password1" placeholder="Enter Password" name="password"
                    required>
                <i class="toggle-password fas fa-eye-slash" onclick="togglePasswordVisibility('password1')"></i>
                <span id="password-icon" class="icon"><i class="fas fa-circle-check"></i><i
                        class="fas fa-circle-exclamation"></i></span>
                <div id="password-strength" class="message"></div>
                <span id="password-message" class="message"></span>
            </div>

            <div class="form-group">
                <label for="password2">Confirm Password:</label>
                <input type="password" class="form-control" id="password2" placeholder="Enter Password Again"
                    name="password2" required>
                <i class="toggle-password fas fa-eye-slash" onclick="togglePasswordVisibility('password2')"></i>
                <span id="confirm-password-icon" class="icon"><i class="fas fa-circle-check"></i><i
                        class="fas fa-circle-exclamation"></i></span>
                <span id="confirm-password-message" class="message"></span>
            </div>

            <div class="form-group">
                <label for="phone_no">Phone No.:</label>
                <input type="text" class="form-control" id="phone_no" placeholder="Enter Phone No." name="phone_no"
                    required>
                <span id="phone-icon" class="icon"><i class="fas fa-circle-check"></i><i
                        class="fas fa-circle-exclamation"></i></span>
                <span id="phone-message" class="message"></span>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address"
                    required>
                <span id="address-icon" class="icon"><i class="fas fa-circle-check"></i><i
                        class="fas fa-circle-exclamation"></i></span>
                <span id="address-message" class="message"></span>
            </div>

            <div class="form-group">
                <label for="id_type">Type of ID:</label>
                <select class="form-control" name="id_type" required>
                    <option>Citizenship</option>
                    <option>Driving Licence</option>
                </select>
            </div>

            <div class="form-group">
                <label for="card_photo">Upload your Selected Card:</label>
                <input type="file" class="form-control" placeholder="Upload id photo" name="id_photo" accept="image/*"
                    onchange="preview_image(event)" required>
                <?php if (isset($errors['id_photo'])): ?>
                    <div style="color: red;"><?php echo $errors['id_photo']; ?></div>
                <?php endif; ?>
            </div>


            <div class="form-group">
                <label>Your selected File:</label><br>
                <img src="" id="output_image" alt="Selected File" height="100px" required>
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