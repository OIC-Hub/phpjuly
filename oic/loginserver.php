<?php 

require '../database.php';
$errors =[];
//  echo "Server is working";
// $user=json_decode(file_get_contents('php://input')) Object without true as second parameter  ;
  $user=json_decode(file_get_contents('php://input'), true) ; // Associative array with true as second parameter
//   echo json_encode($user->serverEmail) ; Object
$email = $user['serverEmail'];
$password = $user['serverEmail'];

if(empty($email)){
  $errors['email'] = "Your email is required";
}
if(empty($password)){
    $errors['password']='Your password is required';
}

//   echo json_encode($user);