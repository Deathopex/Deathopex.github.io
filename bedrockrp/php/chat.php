<?php 
// $_SERVER['REMOTE_ADDR'] 
// file_put_contents('/php/test.txt', "test");
$fh = fopen('php/history.txt','a');
$message = "<" . $_SERVER['REMOTE_ADDR'] . "> " . $_GET['message'] . "\n";
fwrite($fh, "</br>" . $message);
fclose($fh);
?>