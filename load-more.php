<?php

session_start();
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <title>Your Property Page</title> -->
  <style>
    h1 {
      text-align: center;
      color: #333;
      margin-top: 10px;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      border-radius: 40px;
      background-color: lightgray;
    }


    .col-sm-2 {
      width: 33.33%;

      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      /* margin: 30px; */
      padding: 0px;
      background-color: whitesmoke;
    }

   

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      padding: 0px;
      border-radius: 100px;
      background-color: whitesmoke;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
      width: 300px;
      margin: 35px;
      text-align: center;
      overflow: hidden;
      transition: box-shadow 0.3s ease, transform 0.3s ease;
      border-radius: 10px;
      border: 2px solid green;
      display: flex;
      flex-direction: column;
      justify-content: space-between;

    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
      opacity: 0.9;
      transform: scale(1.1);
    }

    .image {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-bottom: 2px solid green;
    }

    .property-info {
      padding: 16px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: green;
      color: white;
      text-decoration: none;
      border-radius: 0 0 10px 10px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: chocolate;
      color: blueviolet;
    }

    .label {
      display: inline-block;
      padding: 5px 10px;
      border-radius: 15px;
      font-weight: bold;
      font-size: 1.4rem;
      margin-bottom: -16px;
    }

    .available {
      background-color: green;
      color: white;
    }

    .booked {
      background-color: red;
      color: white;
    }

    @media screen and (max-width: 768px) {
      .container {
        flex-direction: column;
        align-items: center;
        padding: 10px;
      }

      .card {
        width: 100%;
        margin: 20px 0;
      }

      .image {
        height: 150px;
      }
    }

    @media screen and (max-width: 480px) {
      .card {
        margin: 15px 0;
        border-width: 5px;
      }

      .image {
        height: 120px;
      }

      .label {
        font-size: 1.2rem;
        padding: 10px;
      }

      .btn {
        padding: 8px;
        font-size: 0.9rem;
      }
    }
  </style>
</head>

<body>

  <h1>Featured Properties</h1>

  <div class="container">
    <?php
    include("config/config.php");

    $sql = "SELECT * FROM add_property ORDER BY RAND() LIMIT 9";
    $query = mysqli_query($db, $sql);

    if (mysqli_num_rows($query) > 0) {
      while ($rows = mysqli_fetch_assoc($query)) {
        $property_id = $rows["property_id"];
        $bookedFlag= $rows['booked'];
        ?>
        <div class="col-sm-2">
          <div class="card">
            <?php
            $sql2 = "SELECT * FROM property_photo where property_id='$property_id'";
            $query2 = mysqli_query($db, $sql2);

            if (mysqli_num_rows($query2) > 0) {
              $row = mysqli_fetch_assoc($query2);
              $photo = $row['p_photo'];
              echo '<img class="image" src="owner/' . $photo . '">';
            }
            
            ?>
            <div class="label">
              <?php if ($bookedFlag == 'No') { ?>
                <span class="label available">Available</span>
              <?php } elseif ($bookedFlag == 'Yes') { ?>
                <span class="label booked" > Booked</span>
              <?php } ?>
            </div>
            <br>
            <br>
            <h4><b>
                <?php echo $rows['property_type']; ?>
              </b></h4>
            <p>
              <?php echo $rows['city'] . ', ' . $rows['district'] ?>
            </p>
            <br>
            <p>
              <?php echo '<a href="view-property-login.php?property_id=' . $rows['property_id'] . '" class="btn btn-primary">View Property</a><br>'; ?>
            </p>
            
          </div>
        </div>
        <?php
      }
    }
    ?>

  </div>
  <?php
  include("footer.php");

  ?>

</body>

</html>