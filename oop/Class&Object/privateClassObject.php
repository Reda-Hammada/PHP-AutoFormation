<?php
class  bankAccount {

        private $balance = 5000;
         
        public function setBalance($balance){
            
            $this->balance = $balance;

        }

        public function getBalance(){
            return $this-> balance;
        }
}

$account1 = new bankAccount();
echo $account1 ->balance;
?>
