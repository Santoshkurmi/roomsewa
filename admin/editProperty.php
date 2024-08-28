<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Property Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    session_start();
    $_SESSION['email'] = $_POST['session_email'];

    include("./navbar.php");

    ?>
    <div class="container">
        <center>
            <h3>Edit Property Details</h3>
        </center>
        <?php
        include "../config/config.php";
        if (isset($_POST['edit_property'])) {
            $property_id = $_POST['property_id'];
            $sql = "SELECT * from add_property where property_id='$property_id'";
            $result = mysqli_query($db, $sql);
            if ($result && mysqli_num_rows($result) > 0) {
                $rows = mysqli_fetch_assoc($result);
        ?>
                <form method="POST" enctype="multipart/form-data" action="engine.php">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="country">Country:</label>
                                <select class="form-control" name="country" required="required">
                                    <option value="">--Select Country--</option>
                                    <option value="Nepal" selected>Nepal</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="province">Province/State:</label>
                                <select class="form-control" name="province" required="required">
                                    <option value="<?php echo $rows['province']; ?>"><?php echo $rows['province']; ?></option>
                                    <option value="Koshi Pradesh">Koshi Pradesh</option>
                                    <option value="Madhesh Pradesh">Madhesh Pradesh</option>
                                    <option value="Bagmati Pradesh">Bagmati Pradesh</option>
                                    <option value="Gandaki Pradesh">Gandaki Pradesh</option>
                                    <option value="Lumbini Pradesh">Lumbini Pradesh</option>
                                    <option value="Karnali Pradesh">Karnali Pradesh</option>
                                    <option value="Sudurpaschim Pradesh">Sudurpaschim Pradesh</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="zone">Zone:</label>
                                <select class="form-control" name="zone" id="zoneSelect" required="required" onchange="updateDistricts()">
                                    <option value="<?php echo $rows['zone']; ?>"><?php echo $rows['zone']; ?></option>
                                    <option value="Mechi">Mechi</option>
                                    <option value="Koshi">Koshi</option>
                                    <option value="Sagarmatha">Sagarmatha</option>
                                    <option value="Janakpur">Janakpur</option>
                                    <option value="Bagmati">Bagmati</option>
                                    <option value="Gandaki">Gandaki</option>
                                    <option value="Dhawalagiri">Dhawalagiri</option>
                                    <option value="Karnali">Karnali</option>
                                    <option value="Mahakali">Mahakali</option>
                                    <option value="Seti">Seti</option>
                                    <option value="Bheri">Bheri</option>
                                    <option value="Rapti">Rapti</option>
                                    <option value="Lumbini">Lumbini</option>
                                    <option value="Narayani">Narayani</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="district">District:</label>
                                <select class="form-control" name="district" id="districtSelect" required="required">
                                    <option value="<?php echo $rows['district']; ?>"><?php echo $rows['district']; ?></option>
                                    <!-- District options will be dynamically populated here based on the selected zone -->
                                </select>
                            </div>
                            <script>
                                function updateDistricts() {
                                    // Get the selected zone
                                    var selectedZone = document.getElementById("zoneSelect").value;

                                    // Get the district dropdown
                                    var districtDropdown = document.getElementById("districtSelect");

                                    // Clear existing options
                                    districtDropdown.innerHTML = '<option value="">--Select District--</option>';

                                    // Add new options based on the selected zone
                                    switch (selectedZone) {
                                        case "Mechi":
                                            addDistrictOption("Taplejung", "Taplejung");
                                            addDistrictOption("Panchthar", "Panchthar");
                                            addDistrictOption("Ilam", "Ilam");
                                            addDistrictOption("Jhapa", "Jhapa");
                                            break;

                                        case "Koshi":
                                            addDistrictOption("Morang", "Morang");
                                            addDistrictOption("Sunsari", "Sunsari");
                                            addDistrictOption("Dhankutta", "Dhankutta");
                                            addDistrictOption("Sankhuwasabha", "Sankhuwasabha");
                                            addDistrictOption("Bhojpur", "Bhojpur");
                                            addDistrictOption("Terhathum", "Terhathum");
                                            break;
                                        case "Sagarmatha":
                                            addDistrictOption("Okhaldunga", "Okhaldunga");
                                            addDistrictOption("Khotang", "Khotang");
                                            addDistrictOption("Solukhumbu", "Solukhumbu");
                                            addDistrictOption("Udaypurpa", "Udaypur");
                                            addDistrictOption("Saptari", "Saptari");
                                            addDistrictOption("Siraha", "Siraha");
                                            break;
                                        case "Janakpur":
                                            addDistrictOption("Dhanusa", "Dhanusa");
                                            addDistrictOption("Mahottari", "Mahottari");
                                            addDistrictOption("Sarlahi", "Sarlahi");
                                            addDistrictOption("Sindhuli", "Sindhuli");
                                            addDistrictOption("Ramechhap", "Ramechhap");
                                            addDistrictOption("Dolkha", "Dolkha");
                                            break;
                                        case "Bagmati":
                                            addDistrictOption("Sindhupalchauk", "Sindhupalchauk");
                                            addDistrictOption("Kavreplanchauk", "Kavreplanchauk");
                                            addDistrictOption("Lalitpur", "Lalitpur");
                                            addDistrictOption("Bhaktapur", "Bhaktapur");
                                            addDistrictOption("Kathmandu", "Kathmandu");
                                            addDistrictOption("Nuwakot", "Nuwakot");
                                            addDistrictOption("Rasuwa", "Rasuwa");
                                            addDistrictOption("Dhading", "Dhading");
                                            break;
                                        case "Gandaki":
                                            addDistrictOption("Gorkha", "Gorkha");
                                            addDistrictOption("Lamjung", "Lamjung");
                                            addDistrictOption("Tanahun", "Tanahun");
                                            addDistrictOption("Syangja", "Syangja");
                                            addDistrictOption("Kaski", "Kaski");
                                            addDistrictOption("Manag", "Manag");
                                            break;
                                        case "Dhawalagiri":
                                            addDistrictOption("Mustang", "Mustang");
                                            addDistrictOption("Parwat", "Parwat");
                                            addDistrictOption("Myagdi", "Myagdi");
                                            addDistrictOption("Baglung", "Baglung");
                                            break;
                                        case "Karnali":
                                            addDistrictOption("Dolpa", "Dolpa");
                                            addDistrictOption("Humla", "Humla");
                                            addDistrictOption("Kalikot", "Kalikot");
                                            addDistrictOption("Mugu", "Mugu");
                                            addDistrictOption("Jumla", "Jumla");
                                            break;

                                        case "Mahakali":
                                            addDistrictOption("Kanchanpur", "Kanchanpur");
                                            addDistrictOption("Dadeldhura", "Dadeldhura");
                                            addDistrictOption("Baitadi", "Baitadi");
                                            addDistrictOption("Darchula", "Darchula");
                                            break;
                                        case "Seti":
                                            addDistrictOption("Bajura", "Bajura");
                                            addDistrictOption("Bajhang", "Bajhang");
                                            addDistrictOption("Achham", "Achham");
                                            addDistrictOption("Doti", "Doti");
                                            addDistrictOption("Kailali", "Kailali");
                                            break;
                                        case "Bheri":
                                            addDistrictOption("Bardiya", "Bardiya");
                                            addDistrictOption("Surkhet", "Surkhet");
                                            addDistrictOption("Dailekh", "Dailekh");
                                            addDistrictOption("Banke", "Banke");
                                            addDistrictOption("Jajarkot", "Jajarkot");
                                            break;
                                        case "Rapti":
                                            addDistrictOption("Pyuthan", "Pyuthan");
                                            addDistrictOption("Rolpa", "Rolpa");
                                            addDistrictOption("Rukum", "Rukum");
                                            addDistrictOption("Salyan", "Salyan");
                                            addDistrictOption("Dang", "Dang");
                                            break;
                                        case "Lumbini":
                                            addDistrictOption("Gulmi", "Gulmi");
                                            addDistrictOption("Palpa", "Palpa");
                                            addDistrictOption("Nawalparasi", "Nawalparasi");
                                            addDistrictOption("Rupandehi", "Rupandehi");
                                            addDistrictOption("Arghakhanchi", "Arghakhanchi");
                                            addDistrictOption("Kapilvastu", "Kapilvastu");
                                            break;
                                        case "Narayani":
                                            addDistrictOption("Makwanpur", "Makwanpur");
                                            addDistrictOption("Rauthat", "Rauthat");
                                            addDistrictOption("Bara", "Bara");
                                            addDistrictOption("Parsa", "Parsa");
                                            addDistrictOption("Chitwan", "Chitwan");
                                            break;
                                        default:
                                            // Handle the default case or unexpected values
                                            break;
                                    }
                                }

                                // Helper function to add options to the district dropdown
                                function addDistrictOption(value, text) {
                                    var option = document.createElement("option");
                                    option.value = value;
                                    option.text = text;
                                    document.getElementById("districtSelect").add(option);
                                }
                            </script>
                            <div class="form-group">
                                <label for="city">City:</label>
                                <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" value="<?php echo $rows['city']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="vdc/municipality">VDC/Municipality:</label>
                                <select class="form-control" name="vdc_municipality">
                                    <option value="<?php echo $rows['vdc_municipality'] ?>"><?php echo $rows['vdc_municipality'] ?></option>
                                    <option value="VDC">VDC</option>
                                    <option value="Municipality">Municipality</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="ward_no">Ward No.:</label>
                                <input type="text" class="form-control" id="ward_no" placeholder="Enter Ward No." name="ward_no" value="<?php echo $rows['ward_no'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="tole">Tole:</label>
                                <input type="text" class="form-control" id="tole" placeholder="Enter Tole" name="tole" value="<?php echo $rows['tole']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="contact_no">Contact No.:</label>
                                <input type="text" class="form-control" id="contact_no" placeholder="Enter Contact No." name="contact_no" value="<?php echo $rows['contact_no']; ?>">
                            </div>
                            <div class="form-group">
                                <form method="POST" action="">
                                    <input type="hidden" name="property_id" value="<?php echo $property_id; ?>">
                                    <input type="submit" class="btn btn-danger" name="delete_property" value="Delete">
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="property_type">Property Type:</label>
                                <select class="form-control" name="property_type">
                                    <option value="<?php echo $rows['property_type'] ?>"><?php echo $rows['property_type'] ?></option>
                                    <option value="Full House Rent">Full House Rent</option>
                                    <option value="Flat Rent">Flat Rent</option>
                                    <option value="Room Rent">Room Rent</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="estimated_price">Estimated Price:</label>
                                <input type="estimated_price" class="form-control" id="estimated_price" placeholder="Enter Estimated Price" name="estimated_price" value="<?php echo $rows['estimated_price']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="total_rooms">Total No. of Rooms:</label>
                                <input type="number" class="form-control" id="total_rooms" placeholder="Enter Total No. of Rooms" name="total_rooms" value="<?php echo $rows['total_rooms']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="bedroom">No. of Bedroom:</label>
                                <input type="number" class="form-control" id="bedroom" placeholder="Enter No. of Bedroom" name="bedroom" value="<?php echo $rows['bedroom']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="living_room">No. of Living Room:</label>
                                <input type="number" class="form-control" id="living_room" placeholder="Enter No. of Living Room" name="living_room" value="<?php echo $rows['living_room']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="kitchen">No. of Kitchen:</label>
                                <input type="number" class="form-control" id="kitchen" placeholder="Enter No. of Kitchen" name="kitchen" value="<?php echo $rows['kitchen']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="bathroom">No. of Bathroom/Washroom:</label>
                                <input type="number" class="form-control" id="bathroom" placeholder="Enter No. of Bathroom/Washroom" name="bathroom" value="<?php echo $rows['bathroom']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="description">Full Description:</label>
                                <textarea type="comment" class="form-control" id="description" name="description"><?php echo $rows['description']; ?></textarea>
                            </div>
                            <hr>
                            <div class="form-group">
                                <input type="hidden" name="property_id" value="<?php echo $property_id; ?>">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-lg col-lg-12" value="Update Property" name="update_property">
                            </div>
                            
                        </div>
                    </div>
                </form>
        <?php
            } else {
                echo "No property found with the provided ID.";
            }
        } else {
            echo "No property ID provided.";
        }
        ?>

    </div>


</body>

</html>