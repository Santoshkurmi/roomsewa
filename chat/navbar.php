<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>RoomSewa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../style/navbar.css" class="css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-light justify-content-between">
        <div class="container-fluid">
            <a class="navbar-header" href="index.php">
                <img src="./mainlogo.png" alt="logo">
            </a>

            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contactus.php">Contact Us</a>
                </li>
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION["email"]) && !empty($_SESSION["email"])) {
                    ?>
                    <li><a href="./chat/messages.php"><i class="fa-solid fa-message" style="color: #080808;"></i></a></li>
                    <li id="notification-bell"><a><i class="fa-solid fa-bell"></i></a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span
                                class="glyphicon glyphicon-user"></span> My Profile
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../profile.php">Profile</a></li>
                            <li><a href="../preference_collection.php">Preferences</a></li>
                            <li><a href="../booked-property.php">Booked Property</a></li>
                            <li><a href="../logout.php">Logout</a></li>
                        </ul>
                    </li>

                    <?php
                } else {
                    ?>
                    <li><a href="how-to-register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                    <li><a href="how-to-login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php } ?>
            </ul>


        </div>

    </nav>

    <div id="notificationModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Notification</h4>
                </div>
                <div class="modal-body">
                    <p id="notificationMessage"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#notification-bell").click(function () {
                // Make AJAX call to notification.php
                $.ajax({
                    url: 'notification.php',
                    method: 'GET',
                    dataType: 'json',
                    success: function (response) {
                        // Check if the response contains a redirect URL
                        if (response.redirect_url) {
                            var message = "Please submit your preferences first. <a href='" + response.redirect_url + "'>Submit Preferences</a>";
                            showNotification(message);
                        } else if (response.property_id !== undefined) {
                            // Extract propertyId from the response
                            var propertyId = response.property_id;

                            // Construct the message with propertyId
                            var message = "You may like this property: <a href='view-property-login.php?property_id=" + propertyId + "'>View Property</a>";

                            // Display the message in the modal
                            showNotification(message);
                        } else {
                            console.error("Unexpected response from server:", response);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("Error fetching data:", error);
                    }
                });
            });

            function showNotification(message) {
                // Set the message in the modal body
                $("#notificationMessage").html(message);

                // Show the modal
                $("#notificationModal").modal("show");
            }
        });


    </script>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>