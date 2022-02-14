<?php
// array_unshift add elements to the beginning of the array 
$admin = array('reda', 'ali', 'ahmed');
array_unshift($admin, 'omar');

print_r($admin);
echo $admin[0] . "<br>";


// prepend associative array 

$colors = array(


        'red' => '#ff000',
        'green' => '#00ff00',
        'blue' => '#0000ff',

);


$colors +=  array("white" => "#fff");

echo $colors['white'];




?>