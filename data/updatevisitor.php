<?php
	include 'db.php';	
	$encode = array("");
	$json_data = json_decode(trim(file_get_contents('php://input')), true);

	$ID 		= $json_data["ID"];
	$FIRSTNAME 	= $json_data["FIRSTNAME"];
	$LASTNAME 	= $json_data["LASTNAME"];
	$COMPANY 	= $json_data["COMPANY"];
		
	$sql = "SELECT ID FROM VISITORS WHERE ID=$ID";
	$result = $conn->query($sql);		
	$update = false;
	while($row = mysqli_fetch_assoc($result)) {
	  $update = true;
	}		
	if ($update) {
		$sql = "UPDATE VISITORS SET FIRSTNAME='$FIRSTNAME', LASTNAME='$LASTNAME', COMPANY='$COMPANY' WHERE ID=$ID";
	}
	else{
		$sql = "INSERT INTO VISITORS(ID, FIRSTNAME, LASTNAME, COMPANY) VALUES($ID, '$FIRSTNAME', '$LASTNAME', '$COMPANY')";
	}	
	
	if ($conn->query($sql)) {
		$encode[0] = "SUCCESS";
	}
	else{
	    $encode[0] =  "FAILURE >> " . $conn->error;
	}
	
	echo json_encode($encode);  
?>