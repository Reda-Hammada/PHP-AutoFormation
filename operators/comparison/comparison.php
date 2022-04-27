<?php

$x = 10;
$y = 10;
var_dump($x == $y); 

$x = 20;
$y = 10;

var_dump($x != $y); // bool(true)

$x = '20';
$y = 20;
var_dump($x === $y); // bool(false)

$x = 20;
$y = '10';

var_dump($x !== $y); // bool(true)


$x = 10;
$y = 20;

var_dump($x > $y); // bool(false)
var_dump($y > $x); // bool(true)

$x = 20;
$y = 10;

var_dump($x < $y); // bool(false)
var_dump($y < $x); // bool(true)


$x = 20;
$y = 20;

var_dump($x <= $y); // bool(true)
var_dump($y <= $x); // bool(true)

$x = 20;
$y = 20;

var_dump($x >= $y); // bool(true)
var_dump($y >= $x); // bool(true)