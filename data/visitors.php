<?php
	include 'db.php';	
		
	$sql = "SELECT ID, FIRSTNAME, LASTNAME, COMPANY, EMAIL FROM VISITORS";
	$result = $conn->query($sql);	
	$encode = array();

	while($row = mysqli_fetch_assoc($result)) {
	   $encode[] = $row;
	}

	echo json_encode($encode);  
?>