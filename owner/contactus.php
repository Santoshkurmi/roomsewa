<?php
session_start();
include "./navbar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Reset some default styles */
        body,
        html {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* Choose a web-safe font */
            background-color: #f4f4f4;
            /* Set a light background color */
        }

        body,
        h1,
        h2,
        p {
            margin: 0;
            padding: 0;
        }



        /* Styling for the footer */
        footer {
            background-color: rgba(50, 45, 45, 1);
            color: #fff;
            text-align: center;
            padding: 20px;
            /* position: absolute; */
            bottom: 0;
            width: 100%;
        }

        /* Social media icons styling */
        .social-icons a {
            color: #fff;
            margin: 0 10px;
            font-size: 20px;
            text-decoration: none;
        }

        .bg {
            background-image: url("../images/logo3.gif");
            background-color: #ffc107;
            /* Use a warm background color */
            height: 70%;
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="bg"></div>

<?php 
include "../footer.php";
?>



</body>

</html>