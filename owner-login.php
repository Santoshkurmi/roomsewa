<?php

session_start();
if (isset($_SESSION["email"])) {
  header("location: ./owner/owner-index.php");
}
include 'navbar.php';
include 'owner-engine.php'

  ?>
<!DOCTYPE html>
<html lang="en">

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link rel="stylesheet" href="./style/login.css" class="css">
</head>

<body>


  <div class="container">
    <h3 style="font-weight: bold; text-align: center;">Owner Login</h3>
    <hr><br><br>
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
      </div>
      <div class="form-group">
        <a href="forgot-password-owner.php">Forgot your Password ? </a>
      </div>
      <input type="submit" id="submit" name="owner_login" class="btn btn-primary btn-block" value="Login">

    </form>
  </div>
  <!-- <script src="./style/login.js"></script> -->
  <script>

    // JavaScript to toggle password visibility 
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
  include("footer.php");
  ?>
</body>

</html>