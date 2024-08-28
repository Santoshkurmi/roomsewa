<?php
session_start();
if (!isset($_SESSION["email"])) {

  echo '<script>window.location.href = "admin-login.php";</script>';
} else {
  include "./navbar.php";
  // echo $_SESSION['email'];
?>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

  <body>

    <div class="container-fluid">
      <?php
      include "./property_details.php";
      ?>
    </div>
  </body>
<?php
}
?>