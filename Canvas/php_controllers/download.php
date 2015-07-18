<?php 

// $file = 'http://localhost/tests/canvas/'.$_GET['file'];
// //tell php it's an image
// header('Content-type: image/png');
// //tell php it's an attachment
// header("Content-type: attachment;filename=canvasoutput.png");
// //spit out the file
// readfile($file);

$file_url = 'http://localhost/tests/canvas/'.$_GET['file'];
$output_file_name = 'canvasoutput.png';
header('Content-Type: image/png');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename= $output_file_name"); 
readfile($file_url);