<?php 
//  class User{
//     //properties
//     public $name ="Adeoho";
//     public $color="Black";

//  }

class User{
    //properties
    public $name;
    public $color;
    public $role;

    function set_name($name, $role){
     $this->name = $name;
     $this->role= $role;
    }
    function get_name(){
        return "Welcome to PHP OOP Class, " . $this->name . "Your role is " . $this->role;
    }
    
 }


$student = new User();
$student->set_name('Usman Ibrahim', 'student');
//  echo  $student->name;
 echo "<br>";
 echo  $student->get_name();
echo "<br>";
// echo  $student->color;
// echo "<br/>";
$staff = new User();
$staff->set_name('Sunday Opeyemi', 'teacher');
echo  $staff->role;

?>