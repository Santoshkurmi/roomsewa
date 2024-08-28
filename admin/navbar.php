<!DOCTYPE html>
<html lang="en">

<head>
  <title>RoomSewa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style/navbar.css" class="css">

</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light justify-content-between">
    <div class="container-fluid">
      <a class="navbar-header" href="./owner-index.php">
        <img src="../images/mainlogo.png" alt="logo" style="height:70px; width:70px;">
      </a>

      <!-- Links -->
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./owner-index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contactus.php">Contact Us</a>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <?php
        if (isset($_SESSION["email"]) && !empty($_SESSION['email'])) {
          ?>
          <li><a href="../logout.php">Logout</a></li>
          <?php
        } else { ?>
          <li><a href="../how-to-register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
          <li><a href="../how-to-login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php } ?>
      </ul>
    </div>
  </nav>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>