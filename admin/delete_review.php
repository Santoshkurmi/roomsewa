<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_review"])) {
    delete_review();
}
else if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_tenant"])){
    delete_tenant();
}
else if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_owner"])){
    delete_owner();
}
else if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_booking"])){
    delete_booking();
}

function delete_review(){
    include("../config/config.php");

    // Ensure you sanitize this input as well to prevent SQL injection
    $review_id = isset($_POST['review_id']) ? $_POST['review_id'] : '';
    
    if(empty($review_id)) {
        // Handle the case where review_id is not set
        echo "Error: Review ID is not set.";
        return;
    }

    // Prepare and execute the delete query
    $sql = "DELETE FROM review WHERE review_id = ?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "i", $review_id);
    $success = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if($success) {
        // Display success message
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".alert").fadeTo(2000, 500).slideUp(500, function(){
                    $(".alert").slideUp(500);
                });
            });
        </script>
        <div class="container">
            <div class="alert" role='alert'>
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <center><strong>The review is removed.</strong></center>
            </div>
        </div>
        <?php
        // Redirect to the reviews page after 2 seconds
        echo '<script>setTimeout(function(){ window.location.href = "./reviews_details.php"; }, 2000);</script>';
    } else {
        // Handle the case where deletion failed
        echo "Error: Review deletion failed.";
    }
}

function delete_tenant(){
    include("../config/config.php");

    // Ensure you sanitize this input as well to prevent SQL injection
    $tenant_id = isset($_POST['tenant_id']) ? $_POST['tenant_id'] : '';

    if(empty($tenant_id)) {
        // Handle the case where tenant_id is not set
        echo "Error: Tenant ID is not set.";
        return;
    }

    // Initialize flag to indicate success
    $flag = 0;

    // Check if the tenant has bookings
    $sql = "SELECT property_id FROM booking WHERE tenant_id=?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "s", $tenant_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $property_id = $row['property_id'];
            // Update add_property table to mark property as not booked
            $sql1 = "UPDATE add_property SET booked='No' WHERE property_id=?";
            $stmt1 = mysqli_prepare($db, $sql1);
            mysqli_stmt_bind_param($stmt1, "s", $property_id);
            $query1 = mysqli_stmt_execute($stmt1);
            if($query1) {
                $flag = 1;
            }
        }
    }

    // If all bookings were successfully updated
    if($flag == 1) {
        // Start a transaction for atomicity
        mysqli_autocommit($db, false);

        // Delete entries related to the tenant
        $delete_queries = [
            "DELETE FROM booking WHERE tenant_id=?",
            "DELETE FROM preferences WHERE tenant_id=?",
            "DELETE FROM review WHERE tenant_id=?",
            "DELETE FROM chat WHERE tenant_id=?",
            "DELETE FROM tenant WHERE tenant_id=?"
        ];

        foreach($delete_queries as $delete_query) {
            $stmt = mysqli_prepare($db, $delete_query);
            mysqli_stmt_bind_param($stmt, "s", $tenant_id);
            $query = mysqli_stmt_execute($stmt);
            if($query){
                $flag=1;
            }
            else{
                $flag=0;
            }
            
        }
        if($flag==0) {
            mysqli_rollback($db);
            echo "Error: Tenant deletion failed.";
            return;
        }
        else{

        // Commit the transaction
        mysqli_commit($db);
        }
        // Display success message
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".alert").fadeTo(2000, 500).slideUp(500, function(){
                    $(".alert").slideUp(500);
                });
            });
        </script>
        <div class="container">
            <div class="alert" role='alert'>
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <center><strong>The Tenant is removed.</strong></center>
            </div>
        </div>
        <?php
        // Redirect to the tenant details page after 2 seconds
        echo '<script>setTimeout(function(){ window.location.href = "./tenant_details.php"; }, 2000);</script>';
    } else {
        echo "Error: Tenant deletion failed.";
    }
}


function delete_owner(){
    include("../config/config.php");

    // Ensure you sanitize this input as well to prevent SQL injection
    $owner_id = isset($_POST['owner_id']) ? $_POST['owner_id'] : '';

    if(empty($owner_id)) {
        // Handle the case where owner_id is not set
        echo "Error: Owner ID is not set.";
        return;
    }

    // Initialize flag to indicate success
    // $flag = 0;

    // Check if the owner has properties
    $sql = "SELECT property_id FROM add_property WHERE owner_id=?";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "s", $owner_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $property_id = $row['property_id'];
            // Delete property photos related to each property
            $sql1 = "DELETE FROM property_photo WHERE property_id=?";
            $stmt1 = mysqli_prepare($db, $sql1);
            mysqli_stmt_bind_param($stmt1, "s", $property_id);
            $query1 = mysqli_stmt_execute($stmt1);
            // if($query1) {
            //     $flag = 1;
            // }else{
            //     $flag=0;
            // }
        }
    }

    // If all property photos were successfully deleted
    
        // Start a transaction for atomicity
        mysqli_autocommit($db, false);

        // Delete entries related to the owner
        $delete_queries = [
            "DELETE FROM booking WHERE owner_id=?",
            "DELETE FROM add_property WHERE owner_id=?",
            "DELETE FROM owner WHERE owner_id=?"
        ];

        foreach($delete_queries as $delete_query) {
            $stmt = mysqli_prepare($db, $delete_query);
            mysqli_stmt_bind_param($stmt, "s", $owner_id);
            $query = mysqli_stmt_execute($stmt);
            if(!$query) {
                mysqli_rollback($db);
                echo "Error: Owner deletion failed.";
                return;
            }
        }

        // Commit the transaction
        mysqli_commit($db);

        // Display success message
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".alert").fadeTo(2000, 500).slideUp(500, function(){
                    $(".alert").slideUp(500);
                });
            });
        </script>
        <div class="container">
            <div class="alert" role='alert'>
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <center><strong>The Owner is removed.</strong></center>
            </div>
        </div>
        <?php
        // Redirect to the owner details page after 2 seconds
        echo '<script>setTimeout(function(){ window.location.href = "./owner_details.php"; }, 2000);</script>';
    
    
}
function delete_booking(){
        include("../config/config.php");
    
        // Ensure you sanitize this input as well to prevent SQL injection
        $booking_id = isset($_POST['booking_id']) ? $_POST['booking_id'] : '';
        
        if(empty($booking_id)) {
            // Handle the case where review_id is not set
            echo "Error: Booking ID is not set.";
            return;
        }
        
        // Prepare and execute the delete query
        global $flag;
        $flag=0;
        $sql = "SELECT property_id from booking WHERE booking_id='$booking_id'";
        $query= mysqli_query($db,$sql);
        if(mysqli_num_rows($query)>0){
            $rows=mysqli_fetch_assoc($query);
            $property_id=$rows['property_id'];

        }
        if($query){
        $sql1="UPDATE add_property SET booked='No' WHERE property_id='$property_id';";
        $query1=mysqli_query($db,$sql1);
        }
        if($query1){
            $sql2="DELETE FROM booking where booking_id='$booking_id';";
            $query2=mysqli_query($db,$sql2);
        }
        
    
        if($query2) {
            // Display success message
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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $(".alert").fadeTo(2000, 500).slideUp(500, function(){
                        $(".alert").slideUp(500);
                    });
                });
            </script>
            <div class="container">
                <div class="alert" role='alert'>
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    <center><strong>The Booking Detail have been removed.</strong></center>
                </div>
            </div>
            <?php
            // Redirect to the reviews page after 2 seconds
            echo '<script>setTimeout(function(){ window.location.href = "./booking_details.php"; }, 2000);</script>';
        } else {
            // Handle the case where deletion failed
            echo "Error: Booking Details deletion failed.";
        }
    }   