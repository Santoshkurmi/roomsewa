<?php
session_start();
include '../navbar.php';
if (isset($_SESSION['email'])) {
    global $uemail;
    $uemail = $_SESSION['email'];
}
;


require '../config/config.php';
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>=
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>simplirentrps</title> -->

<style>
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

    .bg {
        /* the image used */
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("./images/heroimagee.jpg");
        /* background-color: #ffc107; */
        /* Use a warm background color */

        /* full height */
        /* height: 80%;
        width:100%
        padding: 20px 30px; */


        /* Center and scale the image nicely */
        /* background-position: bottom;
        background-repeat: no-repeat;
        background-size: cover; */
        /* display: flex; */
        height: 75%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;

    }

    .hero-text {
        text-align: center;
        position: absolute;
        top: 80%;
        left: 23%;
        transform: translate(-50%, -50%);
        color: white;
    }

    .hero-text h1 {
        font-size: 60px;
    }

    .hero-text h2 {
        font-size: 60px;
    }

    .hero-text h3 {
        margin-top: -10px;
        font-size: 60px;
        color: #5cb85c;
    }





    .form-control {
        display: block;
        width: 100%;
        height: auto;
        margin-right: 1000px;
        padding: 10px 0;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        text-align: center;
        background-color: black;
        /* Use a vibrant color for the button */
        color: white;
    }

    .form-control:hover {
        background-color: white;
        pointer-events: visiblePainted;
        color: black;
        border-style: visible;
        border-color: green;
        box-shadow: hotpink;
        border-width: 3px;

        /* Darken the color on hover */
    }

    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }

    .form-container input[type=text],
    .form-container select {
        border: 1px solid #5cb85c;
        box-shadow: 0 0 0 1px #5cb85c;
        border-radius: 5px;
        padding: 10px;
        width: 250px;
        margin-right: 10px;
    }

    .form-container button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #5cb85c;
        color: white;
        cursor: pointer;
        width: 100px;
    }

    .form-container button:hover {
        background-color: #4cae4c;
        transform: scale(1.10);
    }

    @media (max-width: 480px) {
        .bg {
            /* the image used */
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("./images/heroimagee.jpg");

            height: 40%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;

        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        .hero-text h1 {
            font-size: 18px;
        }

        .hero-text h2 {
            font-size: 18px;
        }

        .hero-text h3 {
            margin-top: -10px;
            z font-size: 1px;
            color: #5cb85c;
        }


    }
</style>

<!-- </head> -->

<!-- <body> -->
<div class="bg">
    <div class="hero-text">
        <h1>FIND PERFECT ROOMS </h1>
        <h2>FOR LIVING With</h2>
        <h3>RoomSewa</h3>
    </div>

</div> <br>
<div class="container active-cyan-4 mb-4 inline">
    <div class="form-container">
        <form method="POST" action="search-property.php">
            <input type="text" placeholder="Enter location to search house." name="search_property" aria-label="Search"
                required>
            <select name="property_type">
                <option value="">Property Type</option>
                <option value="roomrent">Room Rent</option>
                <option value="flatrent">Flat Rent</option>
            </select>
            <select name="price_range">
                <option value="">Price Range</option>
                <option value="0-5000">NRs.0 - NRs.5000</option>
                <option value="5000-10000">NRs. 5000 - NRs.10000</option>
                <option value="10000-20000">NRs.10000 - NRs.20000</option>
                <option value="20000+">NRs.2000+</option>
            </select>
            <button type="submit" name="submit">Search</button>
        </form>
    </div>
</div>

<?php
include '../property-list.php';
include '../footer.php';
?>

<!-- </body> -->





<!-- </html> -->