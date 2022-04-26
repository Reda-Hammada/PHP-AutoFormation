<?php
// first way to declare an array
 $items = array('laptop','mobile','monitor');
 echo " the itmes are: " .  $items[0] . " " . $items[1] . "," . $items[2] . "<br>";
// second way to declare an array
$cars = ['volvo','BMW','Reneaut'];
echo "the car is : " . $cars[1] . "<br>" ;

// Associative Array , an array with strings as index
$age = array("Reda" => 21, "Omar" => 20, "Anass" => 21);

echo "Reda is " . $age['Reda'] . " " . "years old" . '<br>';
echo "Anass is " . $age['Anass'] . " ". "years old" . '<br>';
echo "Omar is " . $age['Omar'] . " " . "years old" . '<br>';

// Multidimensional Arrays, each element in the main array can also be an array and also each element in the sub-array can be an array 

$occupation = array(

    "Reda" => array(

        "occupation" => "developer",
        "specialty" => "full stack web developer",
        "experience" => "5 years"
    ),

    "Anass" => array(

        "occupation" => "developer",
        "specialty" => "front-end web developer",
        "experience" => "5 years"

    )



    );

    echo "Reda is a " . $occupation["Reda"] ["specialty"] . " " . ",and he has " . $occupation["Reda"] ["experience"] . " experience" . '<br>';
    
    // foreach statement allows you to iterate over elements of an array, either an indexed array or an associative array.
    $fruits = array('apple', 'orange', 'strawberry', 'avocado');

    foreach($fruits as $fruit){

        echo $fruit . '<br>';
    }

?>