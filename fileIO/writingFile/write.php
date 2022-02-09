<?php
$filename = "text1.txt";
$file = fopen($filename, 'w');
fwrite($file,"this is a test");
fclose($file);


?>