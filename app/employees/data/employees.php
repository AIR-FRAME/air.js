<?php
	include '../../../data/db.php';	
		
	$sql = "SELECT ID, FIRSTNAME, MIDDLENAME, LASTNAME, UNIQUEID, STATUS FROM VSYNC_PERSONS";
	$result = $conn->query($sql);	
	$encode = array();

	while($row = mysqli_fetch_assoc($result)) {
	   $encode[] = $row;
	}

	echo json_encode($encode);  
?>