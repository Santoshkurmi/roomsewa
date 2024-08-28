<?php
session_start();
include("navbar.php");
include("../config/config.php");
?>

<head>
    <link rel="stylesheet" href="owners-property.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="custom-container">



        <h3 id="h3">View Property </h3>


        <?php
        $email = $_SESSION['email'];
        $sql = "SELECT owner_id from owner where email='$email'";
        $query = mysqli_query($db, $sql);
        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query);
            $owner_id = $row['owner_id'];
            $sql2 = "select * from add_property where owner_id='$owner_id'";
            $query1 = mysqli_query($db, $sql2);
            if (mysqli_num_rows($query1) > 0) {
                while ($rows = mysqli_fetch_assoc($query1)) {
                    $property_id = $rows['property_id']; ?>

                    <div class="col-sm-2">
                        <?php
                        $sql2 = "SELECT * FROM property_photo where property_id='$property_id'";
                        $query2 = mysqli_query($db, $sql2);

                        if (mysqli_num_rows($query2) > 0) {
                            $row = mysqli_fetch_assoc($query2);
                            $photo = $row['p_photo'];
                            ?>
                            <div class="card">
                                <?php
                                echo '<img class="image" src="' . $photo . '" alt="Property Image">';
                        } ?>
                            <div class="property-info">
                                <h4><b>
                                        <?php echo $rows['property_type']; ?>
                                    </b></h4>
                                <p>
                                    <?php echo $rows['city'] . ', ' . $rows['district']; ?>
                                </p>
                                <a href="view-property.php?property_id=<?php echo $rows['property_id']; ?>" class="btn">View
                                    Property</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
        }

        ?>


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>