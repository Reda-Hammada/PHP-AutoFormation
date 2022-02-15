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
    }
  }




}





?>