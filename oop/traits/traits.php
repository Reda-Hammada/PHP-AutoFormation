<?php

    class Student  {

        use Adder;

        private $studentName  = 'Reda';

        public function __construct()
        {

            $this->add($this->studentName);

        }
    }



    trait Adder 
    {

        public function add($student){

            echo 'new student ' . $student . ' is added';
			
        }
    }



	$student = new Student();





?>