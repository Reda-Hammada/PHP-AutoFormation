<?php
class bankAccount {

   private $balance; 
   private $amount;

   public function  getBalance(){

    return $this-> balance;

   }

   public function setBalance($balance){

            $this-> balance = $balance;
   }

   public function  setAmount($amount){

    $this-> amount = $amount;
   }

   public function getAmount(){

    return $this -> amount;
   }


  
  public function deposit(){
   
    if($amount > 0){

        $balance += $amount; 

        return $balance;
    }
  }

  public function withdraw(){

    if($amount > 0){

        $balance -= $amount;

        return $balance;
    }
  }




}

class createAccount extends bankAccount {
 //function overriding 
 public function getBalance(){

  return $this-> balance = 12000 . " USD";
 }

}


$account1 = new createAccount();
$account1 -> balance = 6000 ;
$account1 -> amount = 1200;
$bankAccount1 = new bankAccount();
echo $account1-> balance + $account1-> amount . " USD" . PHP_EOL;
echo $account1-> getBalance();
?>