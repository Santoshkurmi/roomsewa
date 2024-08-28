<?php
session_start();
include ("./navbar.php");
?>

<?php
include("./config/config.php");
if(isset($_POST['submit_preference'])){
    
    $prefered_location= $_POST['location'];
    $prefered_budget= $_POST['budget'];
    $prefered_property_type=$_POST['property-type'];
    $prefered_facility=$_POST['facilities'];
    $email=$_SESSION['email'];
    $sql1="select tenant_id from tenant where email='$email'and email_verified_at is not NULL LIMIT 1";
    $result= mysqli_query($db,$sql1);
    $row=mysqli_fetch_assoc($result);
    $tenant_id=$row['tenant_id'];
    $sql2="select count('tenant_id') as t_count from preferences where tenant_id='$tenant_id'";
    $result2=mysqli_query($db,$sql2);
    $row2=mysqli_fetch_assoc($result2);
    $count=$row2['t_count'];
    
    if($count==0){
    $sql="insert into preferences (location,budget,property_type,facility,tenant_id) values ('$prefered_location','$prefered_budget','$prefered_property_type','$prefered_facility','$tenant_id')";
    $result1=mysqli_query($db,$sql);
    }
    else{
        // Update existing preferences
        $sql4 = "UPDATE preferences SET location = '$prefered_location', budget = '$prefered_budget', property_type = '$prefered_property_type', facility = '$prefered_facility' WHERE tenant_id = '$tenant_id'";
        $result4 = mysqli_query($db, $sql4);

    }
    echo '<script>window.location.href = "./index.php";</script>';
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenant Preferences</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            
            color: black;
            padding: 1em;
            text-align: center;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <header>
        <h1>Tenant Preferences</h1>
    </header>
    <main>
        <form id="preferencesForm" action="" method="post">
            <label for="location">Preferred Location:</label>
            <input type="text" id="location" name="location" required>

            <label for="budget">Budget:</label>
            <input type="number" id="budget" name="budget" required>

            <label for="propertyType">Property Type:</label>
            <select id="propertyType" name="property-type" required>
                <option value="flat">Flat</option>
                <option value="room">Room</option>
            </select>


            <label for="amenities">Preferred Facilities:</label>
            <input type="text" id="facilities" name="facilities">

            <button type="submit" name="submit_preference" onsubmit="<?php echo($tenant_id); ?>">Submit Preferences</button>
        </form>
    </main>
    <br>
    <?php
    include("./footer.php");
     ?>
</body>

</html>
