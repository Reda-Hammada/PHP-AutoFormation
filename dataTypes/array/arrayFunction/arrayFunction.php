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

echo $colors['white'] . "<br>";



// array push allows us to add elements to the end of an array 
$numbers = [1, 2, 3, 4];

array_push($numbers, 5, 6, 7);
print_r($numbers);

// associative array 

$roles = [

    'admin' => 1,
    'editor' => 2,
    'approver' => 3
];

$roles['moderator'] = 4;

print_r($roles);

?>