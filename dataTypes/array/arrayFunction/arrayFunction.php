<?php
//array_unshift()

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

// array_push()

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

// array_pop()
// The array_pop() function removes an element from the end of an array and returns that element

$items = [1, 2 ,3 ,4];
$removedItem = array_pop($items);
echo $removedItem;
print_r($items);

// array_shift()
//The array_shift() function removes the first element from an array and returns it

