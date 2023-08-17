<?php 
interface  vehicle{
    public function volvo($model, $price);
    public function corolla($model, $price);
}
class Car implements vehicle{
    public function volvo($model, $price){
      return "The class price is $price and the model is $model";
    }
    public function corolla($model, $price){
        return "The class name is $price and the model is $model";
      }
}

$necar = new Car(2, 3, 4, 5, 6);
  echo  $necar->volvo('2.3M', 'jdjdj');
