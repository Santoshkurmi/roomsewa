<?php
include("../config/config.php");
$property_id = '';
$country = '';
$province = '';
$zone = '';
$district = '';
$city = '';
$vdc_municipality = '';
$ward_no = '';
$tole = '';
$contact_no = '';
$property_type = '';
$estimated_price = '';
$total_rooms = '';
$bedroom = '';
$living_room = '';
$kitchen = '';
$bathroom = '';
$description = '';
$latitude = '';
$longitude = '';
$booked = '';
$owner_id = '';


if(isset($_POST['update_property'])){
	update_property();
}

function update_property(){
	$property_id = $_POST['property_id'];
	global $db;
	$country = validate($_POST['country']);
	$province = validate($_POST['province']);
	$zone = validate($_POST['zone']);
	$district = validate($_POST['district']);
	$city = validate($_POST['city']);
	$vdc_municipality = validate($_POST['vdc_municipality']);
	$ward_no = validate($_POST['ward_no']);
	$tole = validate($_POST['tole']);
	$contact_no = validate($_POST['contact_no']);
	$property_type = validate($_POST['property_type']);
	$estimated_price = validate($_POST['estimated_price']);
	$total_rooms = validate($_POST['total_rooms']);
	$bedroom = validate($_POST['bedroom']);
	$living_room = validate($_POST['living_room']);
	$kitchen = validate($_POST['kitchen']);
	$bathroom = validate($_POST['bathroom']);
	$description = validate($_POST['description']);
	$myQuery="update add_property set country='$country',province='$province',zone='$zone',district='$district',city='$city',vdc_municipality='$vdc_municipality',ward_no='$ward_no',tole='$tole',contact_no='$contact_no',property_type='$property_type',estimated_price='$estimated_price',total_rooms='$total_rooms',bedroom='$bedroom',living_room='$living_room',kitchen='$kitchen',bathroom='$bathroom',description='$description' where property_id='$property_id'";
	$res=mysqli_query($db,$myQuery);

	if (!empty($res)) {

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
		<script>
			window.setTimeout(function() {
				$(".alert").fadeTo(1000, 0).slideUp(500, function() {
					$(this).remove();
				});
			}, 2000);
		</script>
		<div class="container">
			<div class="alert" role='alert'>
				<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
				<center><strong>Your Property Details has been Updated.</strong></center>
			</div>
		</div>
<?php
echo '<script>window.location.href = "index.php";</script>';
	} else {
		echo "error";
	}

	
}



function validate($data)
{
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}






?>