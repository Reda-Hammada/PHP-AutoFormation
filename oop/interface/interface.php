<?php
 

  interface MyInterface 
  {


    public function methodName($name);

    


  }


  class MyClass implements MyInterface
  {

    private $name = 'reda';

    public function __construct(){

        $this->methodName($this->name);
    }

    public function methodName($name){

        echo $this->name;

    }
  }

  $class = new MyClass();

?>