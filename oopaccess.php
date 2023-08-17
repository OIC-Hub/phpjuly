<?php 
class Account{
      private $balance=70;
    public function deposit($amount){
      $this->balance += $amount; 
    }
    public function withdral($amt){
        $this->balance -= $amt; 
      }
      public function user_bal(){
        return $this->balance;
      }
}

$acct = new Account();
 $acct->deposit(1000);
 echo "Thank you for banking with us. Your balance is " . $acct->user_bal();



