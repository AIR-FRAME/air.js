<?php
	include '../../../data/db.php';	
	$encode = array("");
	$json_data = json_decode(trim(file_get_contents('php://input')), true);
	
	$ID 		= $json_data["ID"];
	$NAME 		= $json_data["NAME"];
	$ADD1 		= $json_data["ADD1"];
	$ADD2 		= $json_data["ADD2"];
	$CITY 		= $json_data["CITY"];
	$STATE	 	= $json_data["STATE"];
	$ZIP 		= $json_data["ZIP"];
	$COUNTRY 	= $json_data["COUNTRY"];
		
	$sql = "SELECT ID FROM LOCATIONS WHERE ID=$ID";
	$result = $conn->query($sql);		
	$update = false;
	while($row = mysqli_fetch_assoc($result)) {
	  $update = true;
	}		
	if ($update) {
		$sql = "UPDATE LOCATIONS SET NAME='$NAME', ADD1='$ADD1', ADD2='$ADD2', CITY='$CITY', STATE='$STATE', ZIP='$ZIP', COUNTRY='$COUNTRY' WHERE ID=$ID";
	}
	else{
		$sql = "INSERT INTO LOCATIONS(ID, NAME, ADD1, ADD2, CITY, STATE, ZIP, COUNTRY) VALUES($ID, '$NAME', '$ADD1', '$ADD2', '$CITY', '$STATE', '$ZIP', '$COUNTRY')";
	}	
	
	if ($conn->query($sql)) {
		$encode[0] = "SUCCESS";
	}
	else{
	    $encode[0] =  "FAILURE >> " . $conn->error;
	}
	
	echo json_encode($encode);  
?>