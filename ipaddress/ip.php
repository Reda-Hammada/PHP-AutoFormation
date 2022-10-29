<?php 


    echo $_SERVER['REMOTE_ADDR'];
    
    $a = '1';
    $b = &$a;
    $b = "2$b";
    echo $a.", ".$b;

?>