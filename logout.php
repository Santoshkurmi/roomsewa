<?php   
session_start(); //to ensure you are using same session
// $_SESSION['email'];
session_destroy(); //destroy the session
header("Location:index.php"); //to redirect back to "index.php" after logging out

