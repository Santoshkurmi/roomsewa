<?php
session_start();
include 'navbar.php';

?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>
  <?php

  include("engine.php");
  include("./delete.php");

  ?>
  <div class="container-fluid">
    <ul class="nav nav-pills nav-justified">
      <li class="active" style="background-color: #FFF8DC"><a data-toggle="pill" href="#home">Profile</a></li>
      <li style="background-color: #FAC0E6"><a href="../owner/chat/messages.php">Messages</a></li>
      <li style="background-color: #FAF0E6"><a data-toggle="pill" href="#menu1">Add Property</a></li>
      <li style="background-color: #FFFACD"><a data-toggle="pill" href="#menu2">View Property</a></li>
      <!-- <li style="background-color: #FFFAF0"><a data-toggle="pill" href="#menu3">Update Property</a></li> -->
      <li style="background-color: #FAFAF0"><a data-toggle="pill" href="#menu6">Booked Property</a></li>
    </ul>

    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <center>
          <h3>Owner Profile</h3>
        </center>
        <div class="container">
          <?php
          include("../config/config.php");
          global $u_email;
          $u_email = $_SESSION["email"];

          $sql = "SELECT * from owner where email='$u_email'";
          $result = mysqli_query($db, $sql);

          if (mysqli_num_rows($result) > 0) {
            while ($rows = mysqli_fetch_assoc($result)) {

              ?>
              <div class="card">
                <img src="../images/sunil.jpg" alt="John" style="height:200px; width: 100%">
                <h1>
                  <?php echo $rows['full_name']; ?>
                </h1>
                <p class="title">
                  <?php echo $rows['email']; ?>
                </p>
                <p><b>Phone No.: </b>
                  <?php echo $rows['phone_no']; ?>
                </p>
                <p><b>Address: </b>
                  <?php echo $rows['address']; ?>
                </p>
                <p><b>Id Type: </b>
                  <?php echo $rows['id_type']; ?>
                </p>
                <p><img src="../<?php echo $rows['id_photo']; ?>" height="100px"></p>

                <!-- Trigger the modal with a button -->
                <p><button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal">Update
                    Profile</button></p>


                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Update Profile</h4>
                      </div>
                      <div class="modal-body">

                        <form method="POST">
                          <div class="form-group">
                            <label for="full_name">Full Name:</label>
                            <input type="hidden" value="<?php echo $rows['owner_id']; ?>" name="owner_id">
                            <input type="text" class="form-control" id="full_name" value="<?php echo $rows['full_name']; ?>"
                              name="full_name">
                          </div>
                          <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" value="<?php echo $rows['email']; ?>"
                              name="email" readonly>
                          </div>
                          <div class="form-group">
                            <label for="phone_no">Phone No.:</label>
                            <input type="text" class="form-control" id="phone_no" value="<?php echo $rows['phone_no']; ?>"
                              name="phone_no">
                          </div>
                          <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" value="<?php echo $rows['address']; ?>"
                              name="address">
                          </div>
                          <div class="form-group">
                            <label for="id_type">Type of ID:</label>
                            <input type="text" class="form-control" value="<?php echo $rows['id_type']; ?>" name="id_type"
                              readonly>
                          </div>
                          <div class="form-group">
                            <label>Your Id:</label><br>
                            <img src="../<?php echo $rows['id_photo']; ?>" id="output_image" / height="100px" readonly>
                          </div>
                          <hr>
                          <center><button id="submit" name="owner_update" class="btn btn-primary btn-block">Update</button>
                          </center><br>

                        </form>


                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="menu4" class="tab-pane fade">
            <div class="container">
              <center>
                <h3>See Messages</h3>
              </center>
              <?php
              $owner_id = $rows['owner_id'];
              $sql1 = "SELECT * FROM chat where owner_id='$owner_id' ";

              $query1 = mysqli_query($db, $sql1);

              if (mysqli_num_rows($query1) > 0) {
                while ($row = mysqli_fetch_assoc($query1)) {

                  $tenant_id = $row['tenant_id'];
                  $sql2 = "SELECT * FROM tenant where tenant_id='$tenant_id' ";

                  $query2 = mysqli_query($db, $sql2);

                  if (mysqli_num_rows($query2) > 0) {
                    while ($rows = mysqli_fetch_assoc($query2)) {

                      ?>


                      <link rel="stylesheet" type="text/css" href="message-style.css">

                      <div class="tab">
                        <button class="tablinks" id="defaultOpen"
                          onmouseover="openCity(event, '<?php echo $rows["full_name"]; ?>')">
                          <?php echo $rows["full_name"]; ?>
                        </button>
                      </div>

                      <div id="<?php echo $rows["full_name"]; ?>" class="tabcontent">
                        <?php
                        $sql3 = "SELECT * FROM chat where tenant_id='$tenant_id' AND owner_id='$owner_id' ";

                        $query3 = mysqli_query($db, $sql3);

                        if (mysqli_num_rows($query3) > 0) {
                          while ($ro = mysqli_fetch_assoc($query3)) {
                            echo $ro["message"] . "<br>";
                          }
                        }
                        ?>
                      </div>

                      <div class="clearfix"></div>


                      <?php
                      //echo '<a href="send-message.php?owner_id='.$owner_id.'&tenant_id='.$tenant_id.'">'.$rows["full_name"].'</a>';
                    }
                  }
                }
              }
            }
          } ?>
        </div>
      </div>







      <div id="menu1" class="tab-pane fade">
        <center>
          <h3>Add Property</h3>
        </center>
        <div class="container">


          <div id="map_canvas"></div>
          <form method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="country">Country:</label>
                  <select class="form-control" name="country" required="required">
                    <option value="">--Select Country--</option>
                    <option value="Nepal">Nepal</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="province">Province/State:</label>
                  <select class="form-control" name="province" required="required">
                    <option value="">--Select Province/State--</option>
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
                  <select class="form-control" name="zone" id="zoneSelect1" required="required"
                    onchange="updateDistricts1()">
                    <option value="">--Select Zone--</option>
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
                  <select class="form-control" name="district" id="districtSelect1" required="required">
                    <option value="">--Select District--</option>
                    <!-- District options will be dynamically populated here based on the selected zone -->
                  </select>
                </div>
                <script>
                  function updateDistricts1() {
                    // Get the selected zone
                    var selectedZone1 = document.getElementById("zoneSelect1").value;

                    // Get the district dropdown
                    var districtDropdown1 = document.getElementById("districtSelect1");

                    // Clear existing options
                    districtDropdown1.innerHTML = '<option value="">--Select District--</option>';

                    // Add new options based on the selected zone
                    switch (selectedZone1) {
                      case "Mechi":
                        addDistrictOption1("Taplejung", "Taplejung");
                        addDistrictOption1("Panchthar", "Panchthar");
                        addDistrictOption1("Ilam", "Ilam");
                        addDistrictOption1("Jhapa", "Jhapa");
                        break;

                      case "Koshi":
                        addDistrictOption1("Morang", "Morang");
                        addDistrictOption1("Sunsari", "Sunsari");
                        addDistrictOption1("Dhankutta", "Dhankutta");
                        addDistrictOption1("Sankhuwasabha", "Sankhuwasabha");
                        addDistrictOption1("Bhojpur", "Bhojpur");
                        addDistrictOption1("Terhathum", "Terhathum");
                        break;
                      case "Sagarmatha":
                        addDistrictOption1("Okhaldunga", "Okhaldunga");
                        addDistrictOption1("Khotang", "Khotang");
                        addDistrictOption1("Solukhumbu", "Solukhumbu");
                        addDistrictOption1("Udaypurpa", "Udaypur");
                        addDistrictOption1("Saptari", "Saptari");
                        addDistrictOption1("Siraha", "Siraha");
                        break;
                      case "Janakpur":
                        addDistrictOption1("Dhanusa", "Dhanusa");
                        addDistrictOption1("Mahottari", "Mahottari");
                        addDistrictOption1("Sarlahi", "Sarlahi");
                        addDistrictOption1("Sindhuli", "Sindhuli");
                        addDistrictOption1("Ramechhap", "Ramechhap");
                        addDistrictOption1("Dolkha", "Dolkha");
                        break;
                      case "Bagmati":
                        addDistrictOption1("Sindhupalchauk", "Sindhupalchauk");
                        addDistrictOption1("Kavreplanchauk", "Kavreplanchauk");
                        addDistrictOption1("Lalitpur", "Lalitpur");
                        addDistrictOption1("Bhaktapur", "Bhaktapur");
                        addDistrictOption1("Kathmandu", "Kathmandu");
                        addDistrictOption1("Nuwakot", "Nuwakot");
                        addDistrictOption1("Rasuwa", "Rasuwa");
                        addDistrictOption1("Dhading", "Dhading");
                        break;
                      case "Gandaki":
                        addDistrictOption1("Gorkha", "Gorkha");
                        addDistrictOption1("Lamjung", "Lamjung");
                        addDistrictOption1("Tanahun", "Tanahun");
                        addDistrictOption1("Syangja", "Syangja");
                        addDistrictOption1("Kaski", "Kaski");
                        addDistrictOption1("Manag", "Manag");
                        break;
                      case "Dhawalagiri":
                        addDistrictOption1("Mustang", "Mustang");
                        addDistrictOption1("Parwat", "Parwat");
                        addDistrictOption1("Myagdi", "Myagdi");
                        addDistrictOption1("Baglung", "Baglung");
                        break;
                      case "Karnali":
                        addDistrictOption1("Dolpa", "Dolpa");
                        addDistrictOption1("Humla", "Humla");
                        addDistrictOption1("Kalikot", "Kalikot");
                        addDistrictOption1("Mugu", "Mugu");
                        addDistrictOption1("Jumla", "Jumla");
                        break;

                      case "Mahakali":
                        addDistrictOption1("Kanchanpur", "Kanchanpur");
                        addDistrictOption1("Dadeldhura", "Dadeldhura");
                        addDistrictOption1("Baitadi", "Baitadi");
                        addDistrictOption1("Darchula", "Darchula");
                        break;
                      case "Seti":
                        addDistrictOption1("Bajura", "Bajura");
                        addDistrictOption1("Bajhang", "Bajhang");
                        addDistrictOption1("Achham", "Achham");
                        addDistrictOption1("Doti", "Doti");
                        addDistrictOption1("Kailali", "Kailali");
                        break;
                      case "Bheri":
                        addDistrictOption1("Bardiya", "Bardiya");
                        addDistrictOption1("Surkhet", "Surkhet");
                        addDistrictOption1("Dailekh", "Dailekh");
                        addDistrictOption1("Banke", "Banke");
                        addDistrictOption1("Jajarkot", "Jajarkot");
                        break;
                      case "Rapti":
                        addDistrictOption1("Pyuthan", "Pyuthan");
                        addDistrictOption1("Rolpa", "Rolpa");
                        addDistrictOption1("Rukum", "Rukum");
                        addDistrictOption1("Salyan", "Salyan");
                        addDistrictOption1("Dang", "Dang");
                        break;
                      case "Lumbini":
                        addDistrictOption1("Gulmi", "Gulmi");
                        addDistrictOption1("Palpa", "Palpa");
                        addDistrictOption1("Nawalparasi", "Nawalparasi");
                        addDistrictOption1("Rupandehi", "Rupandehi");
                        addDistrictOption1("Arghakhanchi", "Arghakhanchi");
                        addDistrictOption1("Kapilvastu", "Kapilvastu");
                        break;
                      case "Narayani":
                        addDistrictOption1("Makwanpur", "Makwanpur");
                        addDistrictOption1("Rauthat", "Rauthat");
                        addDistrictOption1("Bara", "Bara");
                        addDistrictOption1("Parsa", "Parsa");
                        addDistrictOption1("Chitwan", "Chitwan");
                        break;
                      default:
                        // Handle the default case or unexpected values
                        break;
                    }
                  }

                  // Helper function to add options to the district dropdown
                  function addDistrictOption1(value, text) {
                    var option = document.createElement("option");
                    option.value = value;
                    option.text = text;
                    document.getElementById("districtSelect1").add(option);
                  }
                </script>
                <div class="form-group">
                  <label for="city">City:</label>
                  <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
                </div>
                <div class="form-group">
                  <label for="vdc/municipality">VDC/Municipality:</label>
                  <select class="form-control" name="vdc_municipality">
                    <option value="">--Select VDC/Municipality--</option>
                    <option value="VDC">VDC</option>
                    <option value="Municipality">Municipality</option>
                  </select>

                </div>
                <div class="form-group">
                  <label for="ward_no">Ward No.:</label>
                  <input type="text" class="form-control" id="ward_no" placeholder="Enter Ward No." name="ward_no">
                </div>
                <div class="form-group">
                  <label for="tole">Tole:</label>
                  <input type="text" class="form-control" id="tole" placeholder="Enter Tole" name="tole">
                </div>
                <div class="form-group">
                  <label for="contact_no">Contact No.:</label>
                  <input type="text" class="form-control" id="contact_no" placeholder="Enter Contact No."
                    name="contact_no">
                </div>
                <div class="form-group">
                  <label for="property_type">Property Type:</label>
                  <select class="form-control" name="property_type">
                    <option value="">--Select Property Type--</option>
                    <option value="Full House Rent">Full House Rent</option>
                    <option value="Flat Rent">Flat Rent</option>
                    <option value="Room Rent">Room Rent</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="estimated_price">Estimated Price:</label>
                  <input type="estimated_price" class="form-control" id="estimated_price"
                    placeholder="Enter Estimated Price" name="estimated_price">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="total_rooms">Total No. of Rooms:</label>
                  <input type="number" class="form-control" id="total_rooms" placeholder="Enter Total No. of Rooms"
                    name="total_rooms">
                </div>
                <div class="form-group">
                  <label for="bedroom">No. of Bedroom:</label>
                  <input type="number" class="form-control" id="bedroom" placeholder="Enter No. of Bedroom"
                    name="bedroom">
                </div>
                <div class="form-group">
                  <label for="living_room">No. of Living Room:</label>
                  <input type="number" class="form-control" id="living_room" placeholder="Enter No. of Living Room"
                    name="living_room">
                </div>
                <div class="form-group">
                  <label for="kitchen">No. of Kitchen:</label>
                  <input type="number" class="form-control" id="kitchen" placeholder="Enter No. of Kitchen"
                    name="kitchen">
                </div>
                <div class="form-group">
                  <label for="bathroom">No. of Bathroom/Washroom:</label>
                  <input type="number" class="form-control" id="bathroom" placeholder="Enter No. of Bathroom/Washroom"
                    name="bathroom">
                </div>
                <div class="form-group">
                  <label for="description">Full Description:</label>
                  <textarea type="comment" class="form-control" id="description"
                    placeholder="Enter Property Description" name="description"></textarea>
                </div>
                <table class="table table-bordered" border="0">
                  <tr>
                    <div class="form-group">
                      <label><b>Latitude/Longitude:</b><span
                          style="color:red; font-size: 10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Click on
                          Button</span></label>
                      <td><input type="text" name="latitude" placeholder="Latitude" id="latitude"
                          class="form-control name_list" required /></td>
                      <td><input type="text" name="longitude" placeholder="Longitude" id="longitude"
                          class="form-control name_list" required /></td>
                      <td><input type="button" value="Get Latitude and Longitude" onclick="getLocation()"
                          class="btn btn-success col-lg-12"></td>
                    </div>
                  </tr>
                </table>
                <table class="table" id="dynamic_field">
                  <tr>
                    <div class="form-group">
                      <label><b>Photos:</b></label>
                      <td><input type="file" name="p_photo[]" placeholder="Photos" class="form-control name_list"
                          required accept="image/*" /></td>
                      <td><button type="button" id="add" name="add" class="btn btn-success col-lg-12">Add More</button>
                      </td>
                    </div>
                  </tr>
                </table>
                <input name="lat" type="text" id="lat" hidden>
                <input name="lng" type="text" id="lng" hidden>
                <hr>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-lg col-lg-12" value="Add Property"
                    name="add_property">
                </div>
              </div>
            </div>
          </form>
          <br><br>

        </div>
      </div>



      <div id="menu2" class="tab-pane fade">
        <h3 id="h3">View Property </h3>
        <div class="container-fluid">
          <div class="row">

            <?php
            if (isset($_SESSION['email'])) {
              $email = $_SESSION['email'];
              $sql = "SELECT owner_id from owner where email='$email'";
              $query = mysqli_query($db, $sql);
              if (mysqli_num_rows($query) > 0) {
                $row = mysqli_fetch_assoc($query);
                $owner_id = $row['owner_id'];
                $sql2 = "select * from add_property where owner_id='$owner_id'";
                $query1 = mysqli_query($db, $sql2);
                if (mysqli_num_rows($query1) > 0) {
                  while ($rows = mysqli_fetch_assoc($query1)) {
                    $property_id = $rows['property_id']; ?>

                    <div class="col-sm-2-a">
                      <div class="card-a">
                        <?php
                        $sql2 = "SELECT * FROM property_photo where property_id='$property_id'";
                        $query2 = mysqli_query($db, $sql2);

                        if (mysqli_num_rows($query2) > 0) {
                          $row = mysqli_fetch_assoc($query2);
                          $photo = $row['p_photo'];
                          echo '<img class="image-a" src="' . $photo . '" alt="Property Image">';
                        } ?>

                        <div class="xutai">
                          <h4><b>
                              <?php echo $rows['property_type']; ?>
                            </b></h4>
                          <p>
                            <?php echo $rows['city'] . ', ' . $rows['district'] ?>
                          </p>
                          <p>
                        </div>


                        <?php echo '<a href="view-property.php?property_id=' . $rows['property_id'] . '" class="btn-a btn-lg btn-primary btn-block">View Property </a><br>'; ?>
                        </p>
                      </div>
                    </div>
                    <?php
                  }
                }
              }
            }
            ?>
          </div>
        </div>
      </div>




      <div id="menu3" class="tab-pane fade">
        <center>
          <h3>Update Property</h3>
        </center>
        <div class="container-fluid">
          <input type="text" id="myInput" onkeyup="updateProperty()" placeholder="Search..." title="Type in a name">
          <div style="overflow-x:auto;">
            <table id="myTable">
              <tr class="header">
                <th>Id.</th>
                <th>Country</th>
                <th>Province/State</th>
                <th>Zone</th>
                <th>District</th>
                <th>City</th>
                <th>VDC/Municipality</th>
                <th>Ward No.</th>
                <th>Tole</th>
                <th>Contact No.</th>
                <th>Property Type</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Estmated Price</th>
                <?php

                $sql = "SELECT * from add_property where owner_id='$owner_id'";
                $result = mysqli_query($db, $sql);

                if (mysqli_num_rows($result) > 0) {
                  while ($rows = mysqli_fetch_assoc($result)) {
                    $property_id = $rows['property_id'];
                    ?>
                  <tr>
                    <td>
                      <?php echo $rows['property_id'] ?>
                    </td>
                    <td>
                      <?php echo $rows['country'] ?>
                    </td>
                    <td>
                      <?php echo $rows['province'] ?>
                    </td>
                    <td>
                      <?php echo $rows['zone'] ?>
                    </td>
                    <td>
                      <?php echo $rows['district'] ?>
                    </td>
                    <td>
                      <?php echo $rows['city'] ?>
                    </td>
                    <td>
                      <?php echo $rows['vdc_municipality'] ?>
                    </td>
                    <td>
                      <?php echo $rows['ward_no'] ?>
                    </td>
                    <td>
                      <?php echo $rows['tole'] ?>
                    </td>
                    <td>
                      <?php echo $rows['contact_no'] ?>
                    </td>
                    <td>
                      <?php echo $rows['property_type'] ?>
                    </td>
                    <td>
                      <?php echo $rows['latitude'] ?>
                    </td>
                    <td>
                      <?php echo $rows['longitude'] ?>
                    </td>
                    <td>Rs.
                      <?php echo $rows['estimated_price'] ?>
                    </td>
                    <td>
                      <?php echo $rows['total_rooms'] ?>
                    </td>
                    <td>
                      <?php echo $rows['bedroom'] ?>
                    </td>
                    <td>
                      <?php echo $rows['living_room'] ?>
                    </td>
                    <td>
                      <?php echo $rows['kitchen'] ?>
                    </td>
                    <td>
                      <?php echo $rows['bathroom'] ?>
                    </td>
                    <td>
                      <?php echo $rows['description'] ?>
                    </td>
                    <td>
                      <?php $sql2 = "SELECT * from property_photo where property_id='$property_id'";
                      $query = mysqli_query($db, $sql2);

                      if (mysqli_num_rows($query) > 0) {
                        while ($row = mysqli_fetch_assoc($query)) { ?>
                          <img src="<?php echo $row['p_photo'] ?>" width="50px">
                        <?php }
                      } ?>
                    </td>
                    <form method="POST">
                      <td>
                        <input type="hidden" name="property_id" value="<?php echo $rows['property_id']; ?>">
                        <a data-toggle="pill" class="btn btn-success" name="edit_property" href="#menu5">Edit</a>
                        <button type="submit" class="btn btn-danger" name="delete_property">Delete</button>
                      </td>
                  </tr>
                  </form>
                <?php }
                } ?>
            </table>
          </div>
        </div>
      </div>




      <div id="menu5" class="tab-pane fade">
        <center>
          <h3>Edit Property Details</h3>
        </center>
        <?php

        $sql = "SELECT * from add_property where property_id='$property_id'";
        $result = mysqli_query($db, $sql);
        while ($rows = mysqli_fetch_assoc($result)) {
          ?>
          <div class="container">


            <div id="map_canvas"></div>
            <form method="POST" enctype="multipart/form-data">
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
                      <option value="<?php echo $rows['province']; ?>">
                        <?php echo $rows['province']; ?>
                      </option>
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
                    <select class="form-control" name="zone" id="zoneSelect" required="required"
                      onchange="updateDistricts()">
                      <option value="<?php echo $rows['zone']; ?>">
                        <?php echo $rows['zone']; ?>
                      </option>
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
                      <option value="<?php echo $rows['district']; ?>">
                        <?php echo $rows['district']; ?>
                      </option>
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
                    <input type="text" class="form-control" id="city" placeholder="Enter City" name="city"
                      value="<?php echo $rows['city']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="vdc/municipality">VDC/Municipality:</label>
                    <select class="form-control" name="vdc_municipality">
                      <option value="<?php echo $rows['vdc_municipality'] ?>">
                        <?php echo $rows['vdc_municipality'] ?>
                      </option>
                      <option value="VDC">VDC</option>
                      <option value="Municipality">Municipality</option>
                    </select>

                  </div>
                  <div class="form-group">
                    <label for="ward_no">Ward No.:</label>
                    <input type="text" class="form-control" id="ward_no" placeholder="Enter Ward No." name="ward_no"
                      value="<?php echo $rows['ward_no'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="tole">Tole:</label>
                    <input type="text" class="form-control" id="tole" placeholder="Enter Tole" name="tole"
                      value="<?php echo $rows['tole']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="contact_no">Contact No.:</label>
                    <input type="text" class="form-control" id="contact_no" placeholder="Enter Contact No."
                      name="contact_no" value="<?php echo $rows['contact_no']; ?>">
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="property_type">Property Type:</label>
                    <select class="form-control" name="property_type">
                      <option value="<?php echo $rows['property_type'] ?>">
                        <?php echo $rows['property_type'] ?>
                      </option>
                      <option value="Full House Rent">Full House Rent</option>
                      <option value="Flat Rent">Flat Rent</option>
                      <option value="Room Rent">Room Rent</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="estimated_price">Estimated Price:</label>
                    <input type="estimated_price" class="form-control" id="estimated_price"
                      placeholder="Enter Estimated Price" name="estimated_price"
                      value="<?php echo $rows['estimated_price']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="total_rooms">Total No. of Rooms:</label>
                    <input type="number" class="form-control" id="total_rooms" placeholder="Enter Total No. of Rooms"
                      name="total_rooms" value="<?php echo $rows['total_rooms']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="bedroom">No. of Bedroom:</label>
                    <input type="number" class="form-control" id="bedroom" placeholder="Enter No. of Bedroom"
                      name="bedroom" value="<?php echo $rows['bedroom']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="living_room">No. of Living Room:</label>
                    <input type="number" class="form-control" id="living_room" placeholder="Enter No. of Living Room"
                      name="living_room" value="<?php echo $rows['living_room']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="kitchen">No. of Kitchen:</label>
                    <input type="number" class="form-control" id="kitchen" placeholder="Enter No. of Kitchen"
                      name="kitchen" value="<?php echo $rows['kitchen']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="bathroom">No. of Bathroom/Washroom:</label>
                    <input type="number" class="form-control" id="bathroom" placeholder="Enter No. of Bathroom/Washroom"
                      name="bathroom" value="<?php echo $rows['bathroom']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="description">Full Description:</label>
                    <textarea type="comment" class="form-control" id="description"
                      name="description"><?php echo $rows['description']; ?></textarea>
                  </div>
                  <hr>
                  <div class="form-group">
                    <input type="hidden" name="property_id" value="<?php echo $property_id; ?>">
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg col-lg-12" value="Update Property"
                      name="update_property">
                  </div>
                </div>
              </div>
            </form>
            <br><br>

          </div>
          <?php
        }
        ?>
      </div>

      <div id="menu6" class="tab-pane fade">
        <center>
          <h3>Booked Property</h3>
        </center>
        <div class="container">
          <!-- <input type="text" id="myInput" onkeyup="bookedProperty()" placeholder="Search..." title="Type in a name"> -->

          <table id="myTable">
            <tr class="header">
              <th>Booked By</th>
              <th>Booker Address</th>
              <th>Property Province</th>
              <th>Property District</th>
              <th>Property Zone</th>
              <th>Property Ward No</th>
              <th>Property Tole</th>
            </tr>

            <?php
          
            include("../config/config.php");
            global $owner_id;
            $u_email = $_SESSION["email"];
            $sql3 = "SELECT owner_id from owner where email='$u_email'";
            $result3 = mysqli_query($db, $sql3);

            if (mysqli_num_rows($result3) > 0) {
              while ($rowss = mysqli_fetch_assoc($result3)) {
                $owner_id = $rowss['owner_id'];
                $sql2 = "SELECT property_id, tenant_id from booking where owner_id='$owner_id'";
                $result2 = mysqli_query($db, $sql2);

                if (mysqli_num_rows($result2) > 0) {
                  while ($rowsss = mysqli_fetch_assoc($result2)) {
                    $property_id = $rowsss['property_id'];
                    $tenant_id = $rowsss['tenant_id'];
                    $myquery = "SELECT full_name, address from tenant where tenant_id='$tenant_id'";
                    $myqueryresult = mysqli_query($db, $myquery);
                    if ($myqueryresult) {
                      $resRow = mysqli_fetch_assoc($myqueryresult);
                      if ($resRow !== null) {
                        $fullname = $resRow['full_name'];
                        $address = $resRow['address'];
                      } else {
                        continue;
                      }

                      $sql = "SELECT province, district, zone, ward_no, tole from add_property where property_id='$property_id'";
                      $result = mysqli_query($db, $sql);

                      if (mysqli_num_rows($result) > 0) {
                        while ($rows = mysqli_fetch_assoc($result)) {
                          ?>
                          <tr>
                            <td>
                              <?php echo $fullname; ?>
                            </td>
                            <td>
                              <?php echo $address; ?>
                            </td>
                            <td>
                              <?php echo $rows['province']; ?>
                            </td>
                            <td>
                              <?php echo $rows['district']; ?>
                            </td>
                            <td>
                              <?php echo $rows['zone']; ?>
                            </td>
                            <td>
                              <?php echo $rows['ward_no']; ?>
                            </td>
                            <td>
                              <?php echo $rows['tole']; ?>
                            </td>
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
        </div>
      </div>


    </div>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->


</body>



<script>
  function viewProperty() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
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
<script>
  function updateProperty() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
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
<script>
  function bookedProperty() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
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
<script>
  $(document).ready(function () {
    var i = 1;
    $('#add').click(function () {
      i++;
      $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="file" name="p_photo[]" placeholder="Photos" class="form-control name_list" required accept="image/*" /></td></td> <td><button id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
    });





    $(document).on('click', '.btn_remove', function () {
      var button_id = $(this).attr("id");
      $('#row' + button_id + '').remove();
    });
    $('#submit').click(function () {
      $.ajax({
        url: "name.php",
        method: "POST",
        data: $('#add_name').serialize(),
        success: function (data) {
          alert(data);
          $('#add_name')[0].reset();
        }
      });
    });
  });
</script>



<script>
  var latitudeInput = document.getElementById("latitude");
  var longitudeInput = document.getElementById("longitude");
  if (latitudeInput.value.trim() !== "" && longitudeInput.value.trim() !== "") {
    // Use the manually entered values
    // You can add additional validation if needed
    map.setCenter(new google.maps.LatLng(parseFloat(latitudeInput.value), parseFloat(longitudeInput.value)));
  } else {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker;
      document.getElementById('lat').value = results[0].geometry.location.lat();
      document.getElementById('lng').value = results[0].geometry.location.lng();


      // add this
      var latt = results[0].geometry.location.lat();
      var lngg = results[0].geometry.location.lng();
      $.ajax({
        url: "your-php-code-url-to-save-in-database",
        dataType: 'json',
        type: 'POST',
        data: {
          lat: lat,
          lng: lngg
        },
        success: function (data) {
          //check here whether inserted or not 
        }
      });


    }
  }
</script>


<script>
  //For Latitude and Longitude
  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else {
      document.getElementById("latitude").value = "Geolocation is not supported by this browser.";
      document.getElementById("longitude").value = "Geolocation is not supported by this browser.";
    }
  }

  function showPosition(position) {
    document.getElementById("latitude").value = position.coords.latitude;
    document.getElementById("longitude").value = position.coords.longitude;
  }
</script>
<script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

</script>