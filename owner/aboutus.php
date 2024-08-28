<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="../style/aboutus.css" class="css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script> -->

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"/> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/> -->

    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: "Robota", sans-serif;
        }

        .about-us {
            padding: 80px 0px;
        }

        .container {
            max-width: 1200px;
            margin: 0px auto;
            padding: 0 20px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .flex {
            flex: 0 0 50%;
            max-width: 50%;
            padding: 0 20px;
        }

        .about-us h2 {
            font-size: 35px;
            margin-bottom: 20px;
            color: #333;
        }

        .about-us h3 {
            font-size: 25px;
            color: #888;
            margin-bottom: 8px;
        }

        .about-us p {
            font-size: 18px;
            line-height: 1.5;
            color: #555;
            margin-bottom: 20px;
        }

        .about-us img {
            display: block;
            max-width: 100%;
            height: 100%;
            margin: 0 auto;
            width: 50%;
            padding-top: 100px;
        }

        .social-links {
            margin-bottom: 20px;
        }

        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            margin-right: 10px;
            color: #fff;
            background-color: #333;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            transition: all 0.4s ease;
        }

        .social-links a :hover {
            transform: translateY(-3px);
        }

        .btn {
            text-decoration: none;
            color: #fff;
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #333;
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 5px;
            transition: all 0.4s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .btn:hover {
            transform: translateY(-3px);
            color: white;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    include './navbar.php';
    ?>

    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="flex">
                    <h2>About Us</h2>
                    <h3>Discover Our Team Story</h3>
                    <p>Welcome to Room Sewa, your trusted partner in finding affordable and secure rental rooms across
                        Nepal. We understand the challenges of finding the perfect place to call home, which is why
                        we've created a platform that puts your needs first. </p>
                    <p>Our mission is to simplify the room search process by offering selection of rooms that
                        fit your lifestyle and budget. Whether you're a student, a working professional, or someone new
                        to the city, Room Sewa is here to help you find a space that feels like home</p>
                    <p>Join us in finding the perfect room for you. With Room Sewa, your next home is just a click
                        away.</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://x.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                    <a href="" class="btn">Learn More</a>
                </div>
                <img src="../images/about.jpg" alt="error">
            </div>
        </div>
    </div>

    <?php 
    include 'footer.php';
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

</body>

</html>