<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenant Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Custom CSS to left-align the table */
        #table-container {
            margin-left: auto;
            margin-right: auto;
        }

        #myTable3 {
            width: 100%;
        }

        #myTable3 th,
        #myTable3 td {
            text-align: left;
        }
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
    session_start();
    include("./navbar.php");
    ?>
    <ul class="nav nav-pills nav-justified">
        <li class="active" style="background-color: #FFF8DC"><a  href="./index.php">Property Lists</a></li>
        <li style="background-color: #FAF0E6"><a href="./owner_details.php">Owners Details</a></li>
        <li style="background-color: #FFFACD"><a href="./tenant_details.php">Tenant Details</a></li>
        <li style="background-color: #FAFACD"><a href="./booking_details.php">Booked Property</a></li>
        <li style="background-color: #FAFACD"><a href="./reviews_details.php">Reviews</a></li>
    </ul>
    
    <center>
        <h3>Tenant Details</h3>
    </center>
    
    <div id="table-container" class="container">
        <input type="text" id="myInput3" onkeyup="myFunction3()" placeholder="Search..." title="Type in a name">
        <?php
  include("../config/config.php");
   // Define variables for pagination
   $records_per_page = 10;
   $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

   $start_from = ($page - 1) * $records_per_page;

   $sql = "SELECT * FROM tenant LIMIT $start_from, $records_per_page";
   $result = mysqli_query($db, $sql);

        ?>
        <table id="myTable3" class="table table-bordered">
            <tr class="header">
                <th>Id</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Encrypted Password</th>
                <th>Phone No.</th>
                <th>Address</th>
                <th>Type of Id</th>
                <th>Id Photo</th>
                <th>Remove</th>
            </tr>

            <?php

            $sql = "SELECT * from tenant";
            $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($rows = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <td><?php echo $rows['tenant_id'] ?></td>
                        <td><?php echo $rows['full_name'] ?></td>
                        <td><?php echo $rows['email'] ?></td>
                        <td><?php echo $rows['password'] ?></td>
                        <td><?php echo $rows['phone_no'] ?></td>
                        <td><?php echo $rows['address'] ?></td>
                        <td><?php echo $rows['id_type'] ?></td>
                        <td><img class="myImg" src="../<?php echo $rows['id_photo']; ?>" width="50px"></td>
                        <?php
                        echo "<td>";
                        echo "<form method='POST' action='delete_review.php'>";
                        echo "<input type='hidden' name='tenant_id' value='" . $rows['tenant_id'] . "'>";
                        echo "<button type='submit' name='delete_tenant' class='btn btn-danger'>Remove</button>";
                        echo "</form>";
                        echo "</td>";
                        ?>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
        <?php
        // Pagination links
        $sql = "SELECT COUNT(*) AS total FROM tenant";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($result);
        $total_pages = ceil($row["total"] / $records_per_page);

        ?>
        <div class="pagination">
            <?php
            for ($i = 1; $i <= $total_pages; $i++) {
            ?>
                <a href="?page=<?php echo $i; ?>" <?php if ($i === $page) echo 'class="active"'; ?>><?php echo $i; ?></a>
            <?php
            }
            ?>
    </div>

    <!-- Modal -->
    <div id="myModal2" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img02">
        <div id="caption2"></div>
    </div>

</body>

<script>
    function myFunction3() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput3");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable3");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            tr[i].style.display = "none";
            td = tr[i].getElementsByTagName("td");
            for (var j = 0; j < td.length; j++) {
                if (td[j]) {
                    if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        break;
                    }
                }
            }
        }
    }

    // Get the modal
    var modal = document.getElementById("myModal2");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementsByClassName("myImg");
    var modalImg = document.getElementById("img02");
    for (var i = 0; i < img.length; i++) {
        img[i].onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            modalImg.alt = this.alt;
        }
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    };
</script>

</html>
