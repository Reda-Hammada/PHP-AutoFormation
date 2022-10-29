<?php
 

  interface MyInterface 
  {

    const user = 1;

    public function methodName($name);

    


  }


  class MyClass implements MyInterface
  {

    public $user_name = 'reda';

    public function methodName($user_name){

        echo $this->user_name;

    }
  }

  $class = new MyClass();
  $class->methodName($user_name);
?>