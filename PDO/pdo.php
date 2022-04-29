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
$product = 'product3';
$stmt->execute([$product]);
$product =  $stmt->fetch(PDO::FETCH_OBJ);
echo var_dump($product) . "<br>";

//named statment 

$sql  = 'SELECT * FROM liveCodingProducts  WHERE productName = :product';
$stmt = $pdo->prepare($sql);
$product = 'product 4';
$stmt->execute(['product' => $product]);
$fetch = $stmt->fetch(PDO::FETCH_ASSOC);
echo $fetch['price'] . "<br>";

// GET ROW COUNT 

$sql = 'SELECT * FROM liveCodingProducts';
$stmt = $pdo->query($sql);
$count = $stmt->rowCount();

echo $count;

// INSERT DATA

$productName = 'product4';
$description = 'product 4 details';
$price = '600';

$sql = "INSERT INTO liveCodingProducts (productName,details,price)
        VALUES(:productName,:description,:price)";

$stmt = $pdo->prepare($sql);
$stmt->execute(['productName' => $productName, 'description'=>$description, 'price'=>$price]);


// update

$id = 1;
$price = "1900";
$sql = "UPDATE liveCodingProducts SET price =':price' WHERE id= ':id'";
$stmt = $pdo->prepare($sql);
$stmt->execute(['price'=>$price,'id'=>$id]);










?>