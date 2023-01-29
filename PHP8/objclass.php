<?php 
class german {
    public function __construct()
    {
        echo 'Guten Tag, Ich heiße Reda';
    }
}

 $language = new german();
 $language::class;
 
 /* as an alternative for get_class() 
    we can use $object::class to get the class name*/


get_class($language) === $language::class;
















?>