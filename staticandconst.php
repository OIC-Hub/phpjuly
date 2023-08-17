<?php
class Car {
    const NAME ='Volvo';
    static public $model="435355";
  static public function isMoving(){
    return  self::NAME ." is moving";
   }
}

echo Car::NAME;
echo Car::$model;
echo Car::isMoving();
// $mycar = new Car();
// echo $mycar->isMoving();
