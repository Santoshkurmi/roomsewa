<?php
  session_start();
  include("navbar.php");
  include("config/config.php");
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      background-color: lightgray;
    }


    .col-sm-2 {
      width: 25%;

      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      /* margin: 30px; */
      padding: 20px;
      background-color: whitesmoke;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
      width: 100%;
      height: 300px;
      margin: 35px;
      text-align: center;
      transition: box-shadow 0.3s ease, transform 0.3s ease;
      border-radius: 20px;
      border-width: 10px;
      border-color: green;
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
      opacity: 0.8;
      transform: scale(1.1);
    }

    .container {
      padding: 2px 16px;
    }

    .btn {

      display: block;
      width: 100%;
      padding: 10px;
      background-color: green;
      color: white;
      text-decoration: none;
      border-radius: 20px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: chocolate;
      color: blueviolet;
    }

    .image {
      min-width: 100%;
      min-height: 200px;
      max-width: 100%;
      max-height: 200px;
      object-fit: cover;
    }
  </style>
</head>

<body>
<?php

if (isset($_POST['submit'])) {
    $search_property = mysqli_real_escape_string($db, $_POST['search_property']);
    $property_type = mysqli_real_escape_string($db, $_POST['property_type']);
    $price_range = mysqli_real_escape_string($db, $_POST['price_range']);

    // Base SQL query
    $sql = "SELECT * FROM add_property WHERE ";
    $conditions = array();

    // Add conditions based on search input
    if (!empty($search_property)) {
        $conditions[] = "CONCAT(zone, district, province, city, tole, property_type, country) LIKE '%$search_property%' ";
    }

    if (!empty($property_type)) {
        $conditions[] = "property_type = '$property_type'";
    }
 
    if (!empty($price_range)) {
        // Parse the price range into minimum and maximum values
        
        $price_parts = explode('-', $price_range);
        $min_price = (int)trim($price_parts[0]);
        $max_price = (int)trim($price_parts[1]);
        $conditions[] = "estimated_price BETWEEN $min_price AND $max_price";
    }

    // Append conditions to the SQL query
    if (!empty($conditions)) {
        $sql .= "  " . implode(' AND ', $conditions);
    } 
    //  $sql = "SELECT * FROM add_property WHERE concat(zone, district, province, city, tole, property_type, country) LIKE '%$search_property%'";
  }


    // Add sorting and limit to the query
    $sql .= " ORDER BY RAND() LIMIT 12;";

    // Execute the query
    echo $sql;
    $query = mysqli_query($db, $sql);

    echo '<center><h1>Search Results</h1></center>';
    if (mysqli_num_rows($query) > 0) {
        echo '<div class="row">';
        while ($rows = mysqli_fetch_assoc($query)) {
            $property_id = $rows['property_id'];

            echo '<div class="col-sm-2">';
            echo '<div class="card">';
            // Fetch and display property photo
            $sql2 = "SELECT * FROM property_photo WHERE property_id='$property_id' LIMIT 1";
            $query2 = mysqli_query($db, $sql2);
            if (mysqli_num_rows($query2) > 0) {
                $row = mysqli_fetch_assoc($query2);
                $photo = $row['p_photo'];
                echo '<img class="image" src="owner/' . $photo . '">';
            }
            // Display property details
            echo '<h4><b>' . $rows['property_type'] . '</b></h4>';
            echo '<p>' . $rows['city'] . ', ' . $rows['district'] . '</p>';
            echo '<p><a href="view-property-login.php?property_id=' . $rows['property_id'] . '" class="btn btn-lg btn-primary btn-block">View Property</a></p>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo "<center><h3>No properties found matching the search criteria...</h3></center>";
    }

?>
