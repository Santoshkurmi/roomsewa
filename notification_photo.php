<head>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 100px;
            margin: 10px;
            text-align: center;
            overflow: hidden;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }
        .image{
            width: 100px;
            object-fit: cover;

        }
    </style>
</head>

<body>

<h3>For You</h3>
    <?php
    include("./config/config.php");
    if(isset($_POST["email"])){
    $id=$_POST['property_id'];
    $sql = "SELECT * from property_photo where property_id='$id'";
    $result = mysqli_query($db, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $property_photo = $row['p_photo'];
    }
}
    ?>
    <div class="card">
        <?php if (isset($property_photo)) { ?>
            <img   class="image" src="owner/<?php echo $property_photo; ?>" alt="Property Image">
            <a href="./view-property-login.php?property_id=<?php echo $id; ?>" class="btn">View Property</a>
        <?php }

        ?>
</body>