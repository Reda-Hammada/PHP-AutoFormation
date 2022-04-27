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
    
    echo $row->price . "<br>";

endif;

//prepared statements(prepare & execute)

// positional statement 

$sql = 'SELECT * FROM  liveCodingProducts WHERE productName = ? ';
$stmt = $pdo->prepare($sql);
$product = 'product 4';
$stmt->execute([$product]);
$product =  $stmt->fetch(PDO::FETCH_OBJ);
echo var_dump($product) . "<br>";

//named statment 

$sql  = 'SELECT * FROM liveCodingProducts WHERE productName = :product4';
$stmt = $pdo->prepare($sql);
$product = 'product 4';
$stmt->execute(['product4' => $product]);
$fetch = $stmt->fetch(PDO::FETCH_ASSOC);
echo $fetch['price'];






?>