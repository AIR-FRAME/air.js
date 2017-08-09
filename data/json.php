<?php
	include 'db.php';	
	
	$id = $_GET['id'];	
	$sql = "SELECT id, firstname, lastname, email, phone, username FROM customers where id=$id";
	$result = $conn->query($sql);	
	$encode = array();

	while($row = mysqli_fetch_assoc($result)) {
	   $encode[] = $row;
	}

	echo json_encode($encode);  
?>