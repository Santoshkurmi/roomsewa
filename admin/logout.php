<?php   
session_start(); //to ensure you are using same session
$_SESSION['email']=null;
session_destroy(); //destroy the session
echo '<script>window.location.href = "index.php";</script>';

