<?php
	include 'db.php';	
	
	$id = $_GET["id"];
	$sql = "SELECT ID, FIRSTNAME, LASTNAME, USERNAME, PHONE, EMAIL FROM _USERS WHERE ID=$id";
	$result = $conn->query($sql);	
	$encode = array();

	while($row = mysqli_fetch_assoc($result)) {
	   $encode[] = $row;
	}

	//$file = 'people.txt';
	//$current = file_get_contents($file);
	//$current .= " [$id] ";
	//file_put_contents($file, $current);
	
	echo json_encode($encode);  
?>