<?php

class bankAccount{

    public $accountNumber;
    public $balance;
}


$account1 = new bankAccount();
$account1 ->accountNumber = 1;
$account1 ->balance = 5000;


echo  "the account number is : " . $account1 ->accountNumber . "</br>";
echo  "the account balance is : " . $account1 ->balance;



?>