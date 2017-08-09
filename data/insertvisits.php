<?php
	include 'db.php';	
	$encode = array("");
	$json_data = json_decode(trim(file_get_contents('php://input')), true);

	$ID 		= $json_data["ID"];
	$MEETINGID 	= $json_data["MEETINGID"];
	$VISITORID 	= $json_data["VISITORID"];
	$STATUS 	= $json_data["STATUS"];

	$sql = "SELECT ID FROM VISITS WHERE ID=$ID";
	$result = $conn->query($sql);		
	$update = false;
	while($row = mysqli_fetch_assoc($result)) {
	  $update = true;
	}		
	if ($update) {
		$sql = "UPDATE VISITS SET VISITORID=$VISITORID, STATUS='$STATUS' WHERE ID=$ID";
	}
	else{
		$sql = "INSERT INTO VISITS(ID, MEETINGID, VISITORID, STATUS) VALUES($ID, $MEETINGID, $VISITORID, '$STATUS')";
	}
	
	if ($conn->query($sql)) {
		$encode[0] = "SUCCESS";
	}
	else{
	    $encode[0] =  "FAILURE >> " . $conn->error;
	}
	
	echo json_encode($encode);  
?>