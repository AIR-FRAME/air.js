<?php
	include 'db.php';	
	
	$id = $_GET["id"];
	$sql = "SELECT ID, FIRSTNAME, LASTNAME, COMPANY, EMAIL FROM VISITORS WHERE ID IN(SELECT VISITORID FROM VISITS WHERE MEETINGID=$id)";
	$result = $conn->query($sql);	
	$encode = array();

	while($row = mysqli_fetch_assoc($result)) {
	   $encode[] = $row;
	}

	echo json_encode($encode);  
?>