<?php
	include 'db.php';	
	$encode = array("");
	$json_data = json_decode(trim(file_get_contents('php://input')), true);

	$ID 			= $json_data["ID"];
	$NAME 			= $json_data["NAME"];
	$VISITDATE 		= $json_data["VISITDATE"];
	$LOCATIONID 	= $json_data["LOCATIONID"];
	$BUILDINGID 	= $json_data["BUILDINGID"];
	$HOSTID			= $json_data["HOSTID"];

	$sql = "SELECT ID FROM MEETINGS WHERE ID=$ID";
	$result = $conn->query($sql);		
	$update = false;
	while($row = mysqli_fetch_assoc($result)) {
	  $update = true;
	}		
	if ($update) {
		$sql = "UPDATE MEETINGS SET NAME='$NAME', VISITDATE='$VISITDATE', HOSTID=$HOSTID, LOCATIONID=$LOCATIONID, BUILDINGID=$BUILDINGID WHERE ID=$ID";
	}
	else{
		$sql = "INSERT INTO MEETINGS(ID, NAME, VISITDATE, LOCATIONID, BUILDINGID, HOSTID) VALUES($ID, '$NAME', '$VISITDATE' ,'$LOCATIONID', '$BUILDINGID', '$HOSTID')";
	}	
	
	if ($conn->query($sql)) {
		$encode[0] = "SUCCESS";
	}
	else{
	    $encode[0] =  "FAILURE >> " . $conn->error;
	}
	
	echo json_encode($encode);  
?>