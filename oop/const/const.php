<?php
class myClass{

    const myConstant = 10;

  


    public function getSum(){

        return self::myConstant * 10;
    }

}

$myclass1 = new myClass();
echo myClass::myConstant . PHP_EOL;
echo $myclass1::myConstant . PHP_EOL;
echo $myclass1->getSum();
?>