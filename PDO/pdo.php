<?php 

$host = 'localhost';
$user = 'Reda';
$password = '123456';
$dbName = 'liveCodingCart';

// set DSN

$dsn = 'mysql:host=' . $host .  ';dbname=' . $dbName;

//Create a PDO instance

$pdo = new PDO($dsn, $user, $password);

//PDO query

$stmt = $pdo->query('SELECT * FROM liveCodingProducts ');

$row = null; 

if($row == null):

    $row =  $stmt->fetch(PDO::FETCH_OBJ);
    
    echo $row->price;
    
endif;


?>