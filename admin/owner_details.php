<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Custom CSS to left-align the table */
        #table-container {
            margin-left: auto;
            margin-right: auto;
        }

        #myTable2 {
            width: 100%;
        }

        #myTable2 th,
        #myTable2 td {
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
        <li class="active" style="background-color: #FFF8DC"><a href="./index.php">Property Lists</a></li>
        <li style="background-color: #FAF0E6"><a href="./owner_details.php">Owners Details</a></li>
        <li style="background-color: #FFFACD"><a href="./tenant_details.php">Tenant Details</a></li>
        <li style="background-color: #FAFACD"><a href="./booking_details.php">Booked Property</a></li>
        <li style="background-color: #FAFACD"><a href="./reviews_details.php">Reviews</a></li>
    </ul>
    <center>
        <h3>Owner Details</h3>
    </center>
    <div id="table-container" class="container-fluid">
        <input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Search..." title="Type in a name">
        <?php
        include("../config/config.php");
        // Define variables for pagination
        $records_per_page = 10;
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

        $start_from = ($page - 1) * $records_per_page;

        $sql = "SELECT * FROM owner LIMIT $start_from, $records_per_page";
        $result = mysqli_query($db, $sql);

        ?>
        <table id="myTable2" class="table table-bordered">
            <tr class="header">
                <th>Id.</th>
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

            if (mysqli_num_rows($result) > 0) {
                while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $rows['owner_id'] ?>
                        </td>
                        <td>
                            <?php echo $rows['full_name'] ?>
                        </td>
                        <td>
                            <?php echo $rows['email'] ?>
                        </td>
                        <td>
                            <?php echo $rows['password'] ?>
                        </td>
                        <td>
                            <?php echo $rows['phone_no'] ?>
                        </td>
                        <td>
                            <?php echo $rows['address'] ?>
                        </td>
                        <td>
                            <?php echo $rows['id_type'] ?>
                        </td>
                        <td><img class="myImg" src="../<?php echo $rows['id_photo'] ?>" width="50px"></td>
                        <div id="myModal" class="modal">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                            <div id="caption"></div>
                        </div>
                        <?php
                        echo "<td>";
                        echo "<form method='POST' action='delete_review.php'>";
                        echo "<input type='hidden' name='owner_id' value='" . $rows['owner_id'] . "'>";
                        echo "<button type='submit' name='delete_owner' class='btn btn-danger'>Remove</button>";
                        echo "</form>";
                        echo "</td>";
                        ?>
                    </tr>
                <?php }
            } ?>
        </table>
        <?php
        // Pagination links
        $sql = "SELECT COUNT(*) AS total FROM owner";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($result);
        $total_pages = ceil($row["total"] / $records_per_page);

        ?>
        <div class="pagination">
            <?php
            for ($i = 1; $i <= $total_pages; $i++) {
                ?>
                <a href="?page=<?php echo $i; ?>" <?php if ($i === $page)
                       echo 'class="active"'; ?>>
                    <?php echo $i; ?>
                </a>
                <?php
            }
            ?>
        </div>
</body>

<script>
    function myFunction2() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput2");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable2");
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

</html>