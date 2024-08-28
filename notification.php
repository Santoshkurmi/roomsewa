<?php
session_start();
function returnNotification()
{
    include("./config/config.php");
    if (isset($_SESSION["email"]) && !empty($_SESSION['email'])) {
        $u_email = $_SESSION['email'];
        $sql = "SELECT tenant_id FROM tenant WHERE email = '$u_email' AND email_verified_at IS NOT NULL LIMIT 1";
        $query = mysqli_query($db, $sql);

        if ($query) {
            $row = mysqli_fetch_assoc($query);
            $tenant_id = $row['tenant_id'];

            // fetching data from preferences
            $sql1 = "SELECT location, budget, property_type, facility FROM preferences WHERE tenant_id = $tenant_id";
            $query1 = mysqli_query($db, $sql1);

            if ($query1) {
                $row1 = mysqli_fetch_assoc($query1);
                
                // Check if any of the preferences are null
                if(!$row1 || in_array(null, $row1)) {
                    // Return JSON response indicating redirection URL
                    return json_encode(["redirect_url" => "preference_collection.php"]);
                }

                $p_location = $row1['location'];
                $p_budget = $row1['budget'];
                $p_property_type = $row1['property_type'];
                $p_facility = $row1['facility'];

                // matching with add_property
                $sql2 = "SELECT property_id FROM add_property WHERE CONCAT(zone, district, province, city, tole, country, description) LIKE '%$p_location%' OR estimated_price = $p_budget OR property_type = '$p_property_type' ORDER BY RAND() LIMIT 1";
                $query2 = mysqli_query($db, $sql2);

                if ($query2) {
                    $row2 = mysqli_fetch_assoc($query2);

                    if ($row2) {
                        $property_id = $row2['property_id'];
                        // Return JSON response with property ID
                        return json_encode(["property_id" => $property_id]);
                    } else {
                        return "No matching property found.";
                    }
                } else {
                    return "Error in Query 2: " . mysqli_error($db);
                }
            } else {
                return "Error in Query 1: " . mysqli_error($db);
            }
        } else {
            return "Error in Main Query: " . mysqli_error($db);
        }
    }
    // Return a default message
    return "Error: Session email is not set.";
}

// Output JSON response
echo returnNotification();

