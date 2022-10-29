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

        echo $this->name . '<br>';

    }
  }

  $class = new MyClass();


    interface Readable
    {
        public function read();
    }

    interface Document extends Readable
    {
        public function getContents();
    }


    // multi interfaces 

    interface name {

        public function printName();

    }

    interface age {

        public function printAge();

    }

    interface occupation {

        public function printOccupation();
    }

    class Person implements name,age,occupation {

        private $name = 'Reda Hammada';
        private $age = '22';
        private $occupation = 'PHP developer';

        public function __construct ()
        {

            $this->printName();
            $this->printAge();
            $this->printOccupation();

        }


        public function printName ()
        {
                echo $this->name . '<br>';
        }

        public function printAge  ()
        {
            echo $this->age . '<br>';

        }

        public function printOccupation ()
        {
            echo $this->occupation . '<br>';

        }
    }


    $person = new Person();
?>