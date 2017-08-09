<?php
	include 'db.php';	
	
	$id = $_GET["id"];
	$sql = "SELECT ID, CARDNUMBER, STATUS, CREATEDON FROM VSYNC_PERSONCARDS WHERE PERSONID=$id";
	$result = $conn->query($sql);	
	$encode = array();

	while($row = mysqli_fetch_assoc($result)) {
	   $encode[] = $row;
	}

	echo json_encode($encode);  
?>