<?php
	//$dbservername =  "dbjson.com";
	$dbservername =  "127.0.0.1";
	$dbusername = "bobby";
	$dbpassword = "one2three";
	$dbname = "VSYNC";

	$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		die("Connection failed !");
	} 
?>

