<?php 

$connectDB =  mysqli_connect('localhost', 'Reda', '123456','prototype2');

if(!$connectDB){

    echo "error connection " . mysqli_connect_error();
}

else { 

    echo "data base has been connected successfully";
}
?>