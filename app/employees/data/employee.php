<?php
	include '../../../data/db.php';	
	
	$id = $_GET["id"];
	$sql = "SELECT ID, FIRSTNAME, MIDDLENAME, LASTNAME, UNIQUEID, STATUS, EMAIL, PHONE, CITY, STATE, COUNTRY FROM VSYNC_PERSONS WHERE ID=$id";
	$result = $conn->query($sql);	
	$encode = array();

	while($row = mysqli_fetch_assoc($result)) {
	   $encode[] = $row;
	}

	echo json_encode($encode);  
?>