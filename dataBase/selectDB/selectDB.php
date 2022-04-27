<?php 

$connectDB =  mysqli_connect('localhost', 'Reda', '123456','prototype2');
<<<<<<< HEAD
$selectDB = 'SELECT  ID, first_name,last_name,Email FROM test';
=======
$selectDB = 'SELECT   first_name,last_name,Email FROM test';
>>>>>>> 8c33f15283cd8b4de0f4142092eb21f37c67f074
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