<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booked Property Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Custom CSS to left-align the table */
        #table-container {
            margin-left: auto;
            margin-right: auto;
        }

        #myTable4 {
            width: 100%;
        }

        #myTable4 th,
        #myTable4 td {
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
        <h3>Booked Property</h3>
    </center>
    <div id="table-container" class="container">
        <input type="text" id="myInput4" onkeyup="myFunction4()" placeholder="Search..." title="Type in a name">
        <?php
        include("../config/config.php");

        // Define variables for pagination
        $records_per_page = 10;
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

        $start_from = ($page - 1) * $records_per_page;

        $sql = "SELECT * FROM booking LIMIT $start_from, $records_per_page";
        $result = mysqli_query($db, $sql);

        // Display table headers
        ?>
        <table id="myTable4">
            <tr class="header">
                <th>Booked Id</th>
                <th>Property ID</th>
                <th>Booked By</th>
                <th>Booker Address</th>
                <th>Property Province</th>
                <th>Property District</th>
                <th>Property Zone</th>
                <th>Property Ward No</th>
                <th>Property Tole</th>
                <th>Property Owner</th>
                <th>Owner Address</th>
                <th>Remove</th>
            </tr>
            <?php
            // Display table rows
            while ($rows = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $rows['booking_id'] ?></td>

                    <?php
                    $tenant_id = $rows['tenant_id'];
                    $property_id = $rows['property_id'];
                    ?>

                    <td><?php echo $property_id ?></td>
                    <?php
                    $sql1 = "SELECT * from tenant where tenant_id='$tenant_id'";
                    $result1 = mysqli_query($db, $sql1);

                    if (mysqli_num_rows($result1) > 0) {
                        while ($row = mysqli_fetch_assoc($result1)) {

                    ?>
                            <td><?php echo $row['full_name']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <?php
                            $sql2 = "SELECT * from add_property where property_id='$property_id'";
                            $result2 = mysqli_query($db, $sql2);

                            if (mysqli_num_rows($result2) > 0) {
                                while ($ro = mysqli_fetch_assoc($result2)) {

                            ?>


                                    <td><?php echo $ro['province']; ?></td>
                                    <td><?php echo $ro['district']; ?></td>
                                    <td><?php echo $ro['zone']; ?></td>
                                    <td><?php echo $ro['ward_no']; ?></td>
                                    <td><?php echo $ro['tole']; ?></td>
                                    <?php
                                    $owner_id = $ro['owner_id'];
                                    $sql3 = "SELECT * from owner where owner_id='$owner_id'";
                                    $result3 = mysqli_query($db, $sql3);

                                    if (mysqli_num_rows($result3) > 0) {
                                        while ($rowss = mysqli_fetch_assoc($result3)) {

                                    ?>
                                            <td><?php echo $rowss['full_name']; ?></td>
                                            <td><?php echo $rowss['address']; ?></td>
                                            <?php
                                            echo "<td>";
                                            echo "<form method='POST' action='delete_review.php'>";
                                            echo "<input type='hidden' name='booking_id' value='" . $rows['booking_id'] . "'>";
                                            echo "<button type='submit' name='delete_booking' class='btn btn-danger'>Remove</button>";
                                            echo "</form>";
                                            echo "</td>";
                                            ?>
                </tr>
<?php
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
?>
        </table>

        <?php
        // Pagination links
        $sql = "SELECT COUNT(*) AS total FROM booking";
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
    </div>
</body>

<script>
    function myFunction4() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput4");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable4");
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