<?php

$dbh = new sqlite('sqlite:/var/www/dbjson/VSYNC/data/VISITS.sqlite');
die();


	include 'db.php';
	$encode = array("");
	$json_data = json_decode(trim(file_get_contents('php://input')), true);
	$ID = $json_data["ID"];
	
	$sql = "SELECT ID, FIRSTNAME, LASTNAME FROM VSYNC_PERSONS";
	$result = $conn->query($sql);	
	
	while($row = mysqli_fetch_assoc($result)) {
	   $encode[] = $row;
	   $sql = "INSERT INTO PERSONS(ID, FIRSTNAME, LASTNAME) VALUES($ID, '$FIRSTNAME', '$LASTNAME')";
	   	if ($conn->query($sql)) {
			
		}
		else{
			$encode[0] =  "FAILURE >> " . $conn->error;
		}
	}	
	
	$encode[0] = "SUCCESS";
	echo json_encode($encode);  
?>