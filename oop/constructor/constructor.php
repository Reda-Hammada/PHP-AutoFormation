<?php

class person{
   
   private $name;
   private $age;

   function __construct($name, $age){

      $this->name = $name;
      $this->age =$age;

      echo $name . " is " . $age . " years old";

   }

}


$person1  = new person('Reda', 21);



?>