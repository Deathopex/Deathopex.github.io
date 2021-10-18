<?php

file_put_contents('test.txt', "test");

print 'TEST';

$file = fopen('test2.txt', "w");
fwrite($file, 'test');
fclose($file);

?>