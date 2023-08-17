<?php 
class Animal {
  
    public $name;
    public $color;
    public $weight;
    public $family;
    function __construct($name="Muturu", $color, $weight, $family)
    {
        $this->name=$name;
        $this->color=$color;
        $this->weight=$weight;
        $this->family=$family;
    }
    function sound($sound){
        return "$this->name is $sound";
    }
}

class Cow extends Animal{
// function sound($s){
//  return "I'm doing fine";
// }
}

$my_cow = new Cow('Red Bororo', '34KG', 'brown', 'Bovidae');

echo $my_cow->name;
echo $my_cow->sound('moo');