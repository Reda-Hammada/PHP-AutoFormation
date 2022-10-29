<?php

abstract class Person 
{
   abstract public function greet();
}


Class English extends Person 
{
    public function __construct()
    {
       $this->greet(); 
    }

    public function greet()
    {
        echo 'Hello' . '<br>';
    }
}

Class German extends Person 
{
    public function __construct()
    {
       $this->greet(); 
    }

    public function greet()
    {
        echo 'Hallo' . '<br>';
    }
}


Class Spanish extends Person 
{
    public function __construct()
    {
       $this->greet(); 
    }

    public function greet()
    {
        echo 'Holla' . '<br>';
    }
}


$English = new English();
$German = new German();
$Spanish = new Spanish();