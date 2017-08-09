<?php
	include 'db.php';	
		
	$sql = "SELECT M.ID MEETINGID, VS.ID, V.ID VISITORID,  M.NAME, M.VISITDATE, VS.STATUS, V.FIRSTNAME, V.LASTNAME, V.COMPANY FROM MEETINGS M JOIN VISITS VS ON M.ID=VS.MEETINGID JOIN VISITORS V ON V.ID=VS.VISITORID";
	$result = $conn->query($sql);	
	$encode = array();

	while($row = mysqli_fetch_assoc($result)) {
	   $encode[] = $row;
	}

	echo json_encode($encode);  
?>