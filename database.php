<?php 
$server = 'localhost';
$user ="root";
$database_name ='school';
$password="Engineer1212@";
$conn = mysqli_connect($server, $user, $password, $database_name);  // or die('Unable to connect');
if(!$conn){
    echo "Unable to connect". mysqli_connect_error($conn);
}