<?php
	include '../../../data/db.php';	
	
	$id = $_GET["id"];
	$sql = "SELECT ID, NAME FROM BUILDINGS WHERE LOCATIONID=$id";
	$result = $conn->query($sql);	
	$encode = array();

	while($row = mysqli_fetch_assoc($result)) {
	   $encode[] = $row;
	}

	echo json_encode($encode);  
?>