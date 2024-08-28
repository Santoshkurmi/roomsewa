<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenant Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./style.css">
    
        <style>
            .pagination {
                margin-top: 20px;
                text-align: center;
            }

            .pagination a {
                color: #333;
                padding: 8px 16px;
                text-decoration: none;
                border: 1px solid #ddd;
                margin: 0 4px;
                border-radius: 4px;
            }

            .pagination a.active {
                background-color: #007bff;
                color: white;
            }

            .pagination a:hover:not(.active) {
                background-color: #ddd;
            }
        </style>
   
</head>

<body>

    <?php
    
    ?>
    
    <ul class="nav nav-pills nav-justified">
        <li class="active" style="background-color: #FFF8DC"><a  href="./index.php">Property Lists</a></li>
        <li style="background-color: #FAF0E6"><a href="./owner_details.php">Owners Details</a></li>

        <li style="background-color: #FFFACD"><a href="./tenant_details.php">Tenant Details</a></li>
        <li style="background-color: #FAFACD"><a href="./booking_details.php">Booked Property</a></li>
        <li style="background-color: #FAFACD"><a href="./reviews_details.php">Reviews</a></li>
      </ul>
        <center>
            <h3>Property Details</h3>
        </center>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..." title="Type in a name">
        <?php
        include("../config/config.php");

        // Define variables for pagination
        $records_per_page = 10;
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

        $start_from = ($page-1) * $records_per_page;

        $sql = "SELECT * FROM add_property LIMIT $start_from, $records_per_page";
        $result = mysqli_query($db, $sql);

        // Display table headers
        ?>
        <table id="myTable">
            <tr class="header">
                <th>Id.</th>
                <th>Country</th>
                <th>Province/State</th>
                <th>Zone</th>
                <th>District</th>
                <th>City</th>
                <th>VDC/Municipality</th>
                <th>Ward No.</th>
                <th>Tole</th>
                <th>Contact No.</th>
                <th>Property Type</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Estmated Price</th>
                <th>Total Rooms</th>
                <th>Bedroom</th>
                <th>Living Room</th>
                <th>Kitchen</th>
                <th>Bathroom</th>
                <th>Description</th>
                <th>Photos</th>
                <th>Edit/Delete</th>
            </tr>
            <?php
            // Display table rows
            while ($rows = mysqli_fetch_assoc($result)) {
                $property_id = $rows['property_id'];
            ?>

                <tr>
                    <td><?php echo $rows['property_id'] ?></td>
                    <td><?php echo $rows['country'] ?></td>
                    <td><?php echo $rows['province'] ?></td>
                    <td><?php echo $rows['zone'] ?></td>
                    <td><?php echo $rows['district'] ?></td>
                    <td><?php echo $rows['city'] ?></td>
                    <td><?php echo $rows['vdc_municipality'] ?></td>
                    <td><?php echo $rows['ward_no'] ?></td>
                    <td><?php echo $rows['tole'] ?></td>
                    <td><?php echo $rows['contact_no'] ?></td>
                    <td><?php echo $rows['property_type'] ?></td>
                    <td><?php echo $rows['latitude'] ?></td>
                    <td><?php echo $rows['longitude'] ?></td>
                    <td>Rs.<?php echo $rows['estimated_price'] ?></td>
                    <td><?php echo $rows['total_rooms'] ?></td>
                    <td><?php echo $rows['bedroom'] ?></td>
                    <td><?php echo $rows['living_room'] ?></td>
                    <td><?php echo $rows['kitchen'] ?></td>
                    <td><?php echo $rows['bathroom'] ?></td>
                    <td><?php echo $rows['description'] ?></td>
                    <td>
                        <?php $sql2 = "SELECT * from property_photo where property_id='$property_id'";
                        $query = mysqli_query($db, $sql2);

                        if (mysqli_num_rows($query) > 0) {
                            while ($row = mysqli_fetch_assoc($query)) { ?>
                                <img src="../owner/<?php echo $row['p_photo'] ?>" width="50px">
                        <?php }
                        } ?>
                    </td>

                    <td>
                        <form method="POST" action="./editProperty.php">
                            <input type="hidden" name="property_id" value="<?php echo $rows['property_id']; ?>">
                            <input type="hidden" name="session_email" value="<?php echo $_SESSION['email'] ?>">
                            <input type="submit" class="btn btn-danger" name="edit_property" value="Edit Property">
                        </form>
                    </td>
                </tr>

                <?php

                ?>
                </tr>
            <?php
            }
            ?>
        </table>

        <?php
        // Pagination links
        $sql = "SELECT COUNT(*) AS total FROM add_property";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($result);
        $total_pages = ceil($row["total"] / $records_per_page);

        ?>
        <div class="pagination">
            <?php
            for ($i = 1; $i < $total_pages; $i++) {
            ?>
                <a href="?page=<?php echo $i; ?>" <?php if ($i === $page) echo 'class="active"'; ?>><?php echo $i; ?></a>
            <?php
            }
            ?>
        </div>
        
</body>




<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        th = table.getElementsByTagName("th");
        for (i = 1; i < tr.length; i++) {
            tr[i].style.display = "none";
            for (var j = 0; j < th.length; j++) {
                td = tr[i].getElementsByTagName("td")[j];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
                        tr[i].style.display = "";
                        break;
                    }
                }
            }
        }
    }
</script>







<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>

<script>
    // Get the modal
    var modal2 = document.getElementById("myModal2");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img2 = document.getElementById("myImg2");
    var modalImg2 = document.getElementById("img02");
    var captionText2 = document.getElementById("caption2");
    img2.onclick = function() {
        modal2.style.display = "block";
        modalImg2.src = this.src;
        captionText2.innerHTML = this.alt;
    }
    var span2 = document.getElementsByClassName("close")[1];
    span2.onclick = function() {
        modal2.style.display = "none";
    }
</script>


<script>
    function updateProperty() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        th = table.getElementsByTagName("th");
        for (i = 1; i < tr.length; i++) {
            tr[i].style.display = "none";
            for (var j = 0; j < th.length; j++) {
                td = tr[i].getElementsByTagName("td")[j];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
                        tr[i].style.display = "";
                        break;
                    }
                }
            }
        }
    }
</script>