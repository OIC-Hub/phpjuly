<?php


session_start();
if(isset($_SESSION['email'])){
    if(isset($_SESSION['role']) && $_SESSION['role'] =='user' ){
    
    header('location:dashboard.php');
}
if(isset($_SESSION['role']) && $_SESSION['role'] =='admin' ){
    
    header('location:index.php');
}
}
require "database.php";
if(isset($_POST['login'])){
$email = $_POST['email'];
$password = md5($_POST['password']);
 
$sql = "SELECT * FROM user WHERE email='$email'";
 $select= $conn->query($sql);
 if($select->num_rows > 0){
    $result = $select->fetch_assoc();
    if(strcmp($password, $result['password'])==0){
        $_SESSION['email'] = $result['email'];
        $_SESSION['role'] = $result['role'];
        if($result['role'] =='admin'){
        header('location:index.php');
    }else{

        header('location:dashboard.php');
    }

   
    }else{
        echo "Invalid details";
    }
 }else{
    echo "Invalid Email";
 }
   

}
