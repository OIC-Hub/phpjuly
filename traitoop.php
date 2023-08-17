<?php

trait Animal{
    function sunds($sound, $name){
     return "$name make sound like $sound";
    }
    function isworking($state, $name){
        return "$name make sound like $state";
       }
}

trait Town{
    public $name;
    function size($name, $size){
     return " The size of $name is $size";
    }
   
}


class Cow {
    use Animal;
    use Town;
}

$my_cow = new Cow('White Fulani', 23, 'hdhdh', 'gdgg');
echo $my_cow->sunds('moo', 'Muturu');
echo $my_cow->size('Osogbo', '234KM');