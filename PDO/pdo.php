<?php 

$host = 'locathost';
$user = 'Reda';
$password = '123456';
$dbName = 'liveCodingCart';

// set DSN

$dsn = 'mysql:host='. $host . ';dbName=' .$dbName;

//Create a PDO instance

$pdo = new PDO($dsn, $user, $password);


?>