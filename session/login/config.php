<?php

function  connectDB(){

$connect = null;

     if($connect == null){

        $connect = mysqli_connect('localhost','red','123456','users');
     }
     
     else {

            $message = "database connection problem";

            throw new Exception($message);
     }

     
     return $connect;


};


?>