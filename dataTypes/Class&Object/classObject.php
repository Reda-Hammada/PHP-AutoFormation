<?php
// public 
class bankAccount{
    // properties
    public $accountNumber;
    public $balance;
    //Methods
    public function getBankAccountOwner(){
         $accountOwner = "reda hammada";

         return $accountOwner;
    }
}


$account1 = new bankAccount();
$account1 ->accountNumber = 1;
$account1 ->balance = 5000;
$account1 ->getBankAccountOwner();

echo "the account owner name is : " . $account1 ->getBankAccountOwner() . "</br>";
echo  "the account number is : " . $account1 ->accountNumber . "</br>";
echo  "the account balance is : " . $account1 ->balance;



?>