<?php
	$dbservername =  "127.0.0.1";
	$dbusername = "poppy";
	$dbpassword = "*************";
	$dbname = "airjs";

	$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		die("Connection failed !");
	} 
?>

