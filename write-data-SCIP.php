<!--php script from George; plus time stamp -->
<!-- Some notes: every php script ends with a semicolon -->

<?php
$post_data = json_decode(file_get_contents('php://input'), true); 

$time = date("Y-m-d-H-i");

// the directory "data" must be writable by the server
$name = "data/".$post_data['filename'].$time.".csv"; //added timestamp to file name

$data = $post_data['filedata'];
// write the file to disk
file_put_contents($name, $data);
?>
