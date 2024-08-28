<?php
// $server = 'localhost';
// $user = 'root';
// $password = '';
// $db ='roomsewa';

// // Create connection
// $conn = mysqli_connect($server, $user, $password, $db);
// // Check connection
// if (!$conn) {
//     die('Connection Failed' . mysqli_connect_error());
// }

 

$db = new mysqli('localhost','root','','roomsewa');

if($db->connect_error){
	echo "Error connecting database";
}






