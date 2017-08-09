<?php
// choose a filename
$filename = "IOS.sqlite";

// access the input stream via php://input
$input = fopen('php://input', 'rb');
$file = fopen($filename, 'wb'); 
//var_dump($file);

stream_copy_to_stream($input, $file);
fclose($input);
fclose($file);

echo "Upload done";
?>