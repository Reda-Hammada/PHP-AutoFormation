<?php
$file = 'text.txt';
$text = fopen($file, 'r');
$size = filesize($file);
$read = fread($text, $size);
echo $read;


?>