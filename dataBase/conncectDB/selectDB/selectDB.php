<?php 

$connectDB =  mysqli_connect('localhost', 'Reda', '123456','prototype2');
$selectDB = 'SELECT last_name FROM test';
$result = mysqli_query($connectDB, $selectDB);
$fetchData = mysqli_fecth_all($result, MYSQLI_ASSOC);
print_r($fetchData);
if(!$connectDB){

    echo "error connection " . mysqli_connect_error();
}

else { 

    echo "data base has been connected successfully";
}
?>