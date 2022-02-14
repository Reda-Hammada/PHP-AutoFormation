<?php
// first way to declare an array
 $items = array('laptop','mobile','monitor');
 echo " the itmes are: " .  $items[0] . " " . $items[1] . "," . $items[2] . "<br>";
// second way to declare an array
$cars = ['volvo','BMW','Reneaut'];
echo "the car is : " . $cars[1] . "<br>" ;

// Associative Array , an array with strings as index
$age = array("Reda" => 21, "Omar" => 20, "Anass" => 21);

echo "Reda is " . $age['Reda'] . " " . "years old";
echo "Anass is " . $age['Anass'] . " ". "years old";
echo "Omar is " . $age['Omar'] . " " . "years old"
?>