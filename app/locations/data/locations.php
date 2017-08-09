<?php
	include '../../../data/db.php';	
		
	$sql = "SELECT ID, NAME, ADD1, ADD2, CITY, STATE, ZIP, COUNTRY FROM LOCATIONS LIMIT 20";
	$result = $conn->query($sql);	
	$encode = array();

	while($row = mysqli_fetch_assoc($result)) {
	   $encode[] = $row;
	}

	echo json_encode($encode);  
?>