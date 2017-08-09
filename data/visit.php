<?php
	include 'db.php';	
	
	$id = $_GET["id"];
	$sql = "SELECT ID, NAME, VISITDATE FROM MEETINGS WHERE ID=$id";
	$result = $conn->query($sql);	
	$encode = array();

	while($row = mysqli_fetch_assoc($result)) {
	   $encode[] = $row;
	}

	echo json_encode($encode);  
?>