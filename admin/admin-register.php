<?php 
include("navbar.php");
?>
<head>
  <link rel="stylesheet" href="../style/register.css" class="css">
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
</style>

<body>
  

<div class="container">
  <h3 style="font-weight: bold; text-align: center;">Admin Register</h3><hr><br>
  <form method="POST" action="admin-engine.php" enctype="multipart/form-data">
    <div class="form-group">
      <label for="full_name">Full Name:</label>
      <input type="text" class="form-control" id="full_name" placeholder="Enter Full Name" name="full_name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password1">Password:</label>
      <div class="password-container"> <!-- Added container -->
        <input type="password" class="form-control" id="password1" placeholder="Enter Password" name="password" oninput="checkPasswordStrength()" required>
        <i class="toggle-password fas fa-eye-slash" onclick="togglePasswordVisibility('password1')"></i> <!-- Eye icon -->
      </div>
      <div id="password-strength"></div>
    </div>
    <div class="form-group">
      <label for="password2">Confirm Password:</label>
      <div class="password-container"> <!-- Added container -->
        <input type="password" class="form-control" id="password2" placeholder="Enter Password Again" oninput="checkPasswordMatch()" required>
        <i class="toggle-password fas fa-eye-slash" onclick="togglePasswordVisibility('password2')"></i> <!-- Eye icon -->
      </div>
      <div id="password-match"></div>
    </div>
    <center>
      <button id="submit" name="admin_register" class="btn btn-primary btn-block" onclick="return Validate()">Register</button>
    </center><br>
  </form>
</div>
<?php  
include('../footer.php');
?>
</body>

<script type='text/javascript'>
function togglePasswordVisibility(passwordId) {
  var passwordField = document.getElementById(passwordId);
  var icon = passwordField.parentElement.querySelector('.toggle-password');
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

function checkPasswordStrength() {
  var password = document.getElementById("password1").value;
  var strength = 0;

  // Check for uppercase letters
  if (/[A-Z]/.test(password)) {
    strength++;
  }

  // Check for lowercase letters
  if (/[a-z]/.test(password)) {
    strength++;
  }

  // Check for numbers
  if (/\d/.test(password)) {
    strength++;
  }

  // Check for special characters
  if (/[^A-Za-z0-9]/.test(password)) {
    strength++;
  }

  var strengthText = "";
  if (password.length < 8) {
    strengthText = "Password must be at least 8 characters long containing Uppercase, Lowercase, Special Characters.";
  } else {
    switch (strength) {
      case 1:
        strengthText = "Weak";
        break;
      case 2:
        strengthText = "Moderate";
        break;
      case 3:
        strengthText = "Strong";
        break;
      case 4:
        strengthText = "Very Strong";
        break;
    }
  }

  document.getElementById("password-strength").innerText = strengthText;
}

function checkPasswordMatch() {
  var password1 = document.getElementById("password1").value;
  var password2 = document.getElementById("password2").value;

  if (password1 !== password2) {
    document.getElementById("password-match").innerText = "Passwords do not match.";
  } else {
    document.getElementById("password-match").innerText = "";
  }
}

function Validate() {
  var password = document.getElementById("password1").value;
  var confirmPassword = document.getElementById("password2").value;
  if (password != confirmPassword) {
    alert("Passwords do not match.");
    return false;
  }
  return true;
}
</script>
<script src="../style/register.js"></script>