<?php
session_start();
var_dump($_SESSION['email']);
if (isset($_SESSION['email'])&&$_SESSION['flag']) {
    $u_email = $_SESSION['email'];

    //echo $u_email;
    //echo $_SESSION['flag'];
    include("config/config.php");
    global $property_id, $owner_id, $tenant_id;
    if (isset($_SESSION['property_id'])) {
        $property_id = $_SESSION['property_id'];
        echo $property_id;
        $myQuery = "SELECT owner_id from add_property where property_id='$property_id'";
        $result = mysqli_query($db, $myQuery);
        if (mysqli_num_rows($result) > 0) {
            $r = mysqli_fetch_assoc($result);
            $owner_id = $r['owner_id'];
        }
    }
    $sql = "SELECT * FROM tenant where email='$u_email'";
    $query = mysqli_query($db, $sql);

    if (mysqli_num_rows($query) > 0) {
        $rows = mysqli_fetch_assoc($query);
        $tenant_id = $rows['tenant_id'];
    }
    mysqli_begin_transaction($db);
    $sql1 = "UPDATE add_property SET booked='Yes' WHERE property_id='$property_id' AND owner_id='$owner_id'";
    $query1 = mysqli_query($db, $sql1);

    $sql2 = "INSERT INTO booking(property_id,tenant_id,owner_id) VALUES ('$property_id','$tenant_id','$owner_id')";
    $query2 = mysqli_query($db, $sql2);

    if ($query1 && $query2) {
        mysqli_commit($db);
?>

        <style>
            .alert {
                padding: 20px;
                background-color: #DC143C;
                color: white;
            }

            .closebtn {
                margin-left: 15px;
                color: white;
                font-weight: bold;
                float: right;
                font-size: 22px;
                line-height: 20px;
                cursor: pointer;
                transition: 0.3s;
            }

            .closebtn:hover {
                color: black;
            }
        </style>

        <div class="container">
            <div class="alert" role='alert'>
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <center><strong>Thank you for booking this property.</strong></center>
            </div>
        </div>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
        <script>
            $(document).ready(function() {
                $(".alert").fadeTo(500, 4).slideUp(500, function() {
                    $(this).closest('.container').remove();
                });
                setTimeout(function() {
                    <?php
                    $_SESSION['flag']=false;
                    ?>
                    window.location.href = './view-property-login.php?property_id=<?php echo $property_id;?>';
                }, 500);
                <?php
            
            ?>
            });
        </script>
<?php
        echo '<script>window.location.href = "./view-property.php?property_id=$property_id";</script>';
    }

} else {
    echo "Something went wrong";
    echo '<script>window.location.href = "./index.php";</script>';

}
?>