<?php 
session_start();
if(isset($_SESSION["email"])){
  echo '<script>window.location.href = "index.php";</script>';
}

include("navbar.php");
include("admin-engine.php");

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/login.css" class="css">
    <style>
       
    .password-container {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #333;
        }
        </style>
        </head>
<body>
<div class="container">
  <h3 style="font-weight: bold; text-align: center;">Admin Login</h3><hr><br><br>
  <form method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
                <label for="pwd">Password:</label>
                <div class="password-container"> <!-- Added container -->
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                    <i class="toggle-password fas fa-eye-slash" onclick="togglePasswordVisibility()"></i> <!-- Eye icon -->
                </div>
    <div class="form-group">
      <a href="forgot-password-admin.php">Lost your Password ? </a> 
    </div>
    <center><input type="submit" id="submit" name="admin_login" class="btn btn-primary btn-block" value="Login"></center>
  </form>
</div>
<!-- JavaScript to toggle password visibility -->
<script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("pwd");
            var icon = document.querySelector(".toggle-password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                passwordField.type = "password";
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        }
    </script>

<br><br>

<?php
  include("../footer.php");
  ?>
</body>
</html>