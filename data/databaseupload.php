<?php
/* File: testupload.php */
echo "Files uploaded: ";
echo count($_FILES);


/*$target_dir = "uploads/";
$target_dir = $target_dir . basename($_FILES["uploadFile"]["name"]);


if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_dir)) {
    echo json_encode([
    	"Message" => "The file ". basename( $_FILES["uploadFile"]["name"]). " has been uploaded.",
    	"Status" => "OK",
    ]);
} else {
	echo json_encode([
		"Message" => "Sorry, there was an error uploading your file.",
		"Status" => "Error",
	]);
}
*/
?>