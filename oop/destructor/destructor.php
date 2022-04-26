<?php

class person{
   
    private $name;
    private $age;
 
    function __construct($name, $age){
 
       $this->name = $name;
       $this->age =$age;
 
       echo $name . " is " . $age . " years old". PHP_EOL;
 
    }

    public function __destruct(){

      echo "object has been cleaned up";
    }
 
 }


$person1 = new person("reda", 21);




?>