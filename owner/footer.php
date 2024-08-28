<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Reset some default styles */
        body, h1, h2, p {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
        }

        /* Styling for the footer */
        footer {
            background-color: rgba(50,45 , 45, 1);;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: relative;
            bottom: 0;
            width: 100%;
            /* height: 300px; */
        }

        footer .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: flex-start;
            max-width: 1200px;
            margin: 0 auto;
        }

        footer .container div {
            flex: 1;
            margin: 20px;
            min-width: 250px;
        }

        footer h3 {
            font-size: 24px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        footer p {
            font-size: 18px;
            margin-bottom: 15px;
            line-height: 1.6;
        }


        /* Social media icons styling */
        .social-icons a {
            color: #fff;
            margin: 0 10px;
            font-size: 25px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #ff6f61;
        }

        hr {
            width: 100%;
            margin: 40px auto;
            border-color: rgba(255, 255, 255, 0.2);
        }

        @media (max-width: 768px) {
            footer .container {
                flex-direction: column;
                align-items: center;
            }

            footer .container div {
                text-align: center;
                margin: 20px 0;
            }
        }

      
    </style>
</head>
<body>

    <!-- Your website content goes here -->

    <footer>
        <div>
            <h3>Contact Information</h3>
            <p><i class="fa-solid fa-envelope"></i>  roomsewa@gmail.com</p>
            <p><i class="fa-solid fa-phone"></i>  9860080745,9869144346</p>
        </div>
        
        <div class="social-icons">
            <h3>Follow Us</h3>
            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://x.com/" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        
        <div>
        <p><i class="fa-solid fa-location-dot"></i>
              Golpark, Butwal, Lumbini</p>
        </div> <hr>
        <div>
        <p >&copy; 2024 RoomSewa. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
