<!--php script from George: -->

<?php
$post_data = json_decode(file_get_contents('php://input'), true); 
$time = date("Y-m-d-H-i");
// the directory "data" must be writable by the server
$name = "data/".$post_data['filename'].$time.".csv"; //adding timestamp to file name
$data = $post_data['filedata'];
// write the file to disk
file_put_contents($name, $data);
?>