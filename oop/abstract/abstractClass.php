<?php

    abstract class MyAbstractClass
    {

        abstract public function phpMethod($message);


    }


    class PHPClass  extends MyAbstractClass
    {

        public function phpMethod($message){

            echo $message;
        }

    }

    $php = new PHPClass();
    $php->phpMethod('PHP abstract class is awesome!');


?>