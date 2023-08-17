<?php 
abstract class Products{
    public $name;
    public $price;
    public $image;
    public function __construct($image){
        $this->image = $image;
    }
    abstract public function isPrice($price);
    abstract public function validate_name($name):string;

}

class tv extends Products{
    public $errors=[];
   public function isPrice($price){
    if(empty($price)){
     $this->errors['price']="Price is required";
     return false;
    } else if(! is_numeric($price)){
        $this->errors['price']="Not a valid price";
       return false;
    }else{
        return $price;
       }
 } 
 public function validate_name($name):string{
    if(empty($name)){
        $this->errors['name']="name is required";
       return false;
    } 
       else{
        return $name;
       }
    
 } 
}


$lg = new tv('https://m.media-amazon.com/images/I/91olP+2E4PL._AC_SY355_.jpg');
$mytv =$lg->validate_name('LG 55-inch Class QNED85 Series 4K Smart TV');
if($mytv){
    echo $mytv;
}else{
  echo  $lg->errors['name'];
};