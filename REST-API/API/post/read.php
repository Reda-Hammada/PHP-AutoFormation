<?php

//headers

header('Access-Control-Allow-Origin:*');
header('Content-type:application/json');


// objects instance 

require_once '../../config/dataBase.php';
require_once '../../models/post.php';

$connect = new dataBase();
$dataBase = $connect->connect();
$post = new post($dataBase);


$result = $post->read();
$row  = $result->fetchall(PDO::FETCH_ASSOC);

echo json_encode($row);








?>











