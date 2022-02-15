<?php
 class Customer {


    private $name; 

    public function setName($name){

        $this->name = $name;
    }

    public function  getName(){

        return $this->name;
    }
 }

 $Customer1 = new Customer();

 $Customer1->$name = 'reda';

 echo  $Customer1->$name;



?>