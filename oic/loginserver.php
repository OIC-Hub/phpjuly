<?php 
session_start();
require '../database.php';
$errors =[];
$response=[];
//  echo "Server is working";
// $user=json_decode(file_get_contents('php://input')) Object without true as second parameter  ;
 if($user=json_decode(file_get_contents('php://input'), true)){ // Associative array with true as second parameter
//   echo json_encode($user->serverEmail) ; Object
$email = $user['serverEmail'];
$password =$user['serverPassword'];
} 
if(empty($email)){
  $errors['email'] = "Your email is required";
}
if(empty($password)){
    $errors['password']='Your password is required';
}
if(count($errors) ==0){
     $password = md5($password);
    $sql= "SELECT email, password from user WHERE email=?";
     $stm = $conn->prepare($sql);
     $stm->bind_param('s', $email);
     $stm->execute();
     $result=$stm->get_result();
     if($result->num_rows > 0){
      $server_user = $result->fetch_assoc();
      $server_password = $server_user['password'];
    if(strcmp($server_password, $password)== 0){
     $response['success']=true;
     $_SESSION['email']= $email;
    }else{
      $errors['password'] ="Invalid Password";
    }
     }else{
      $errors['email'] ="Invalid email";
     }
}

if(count($errors) > 0){
  echo  json_encode($errors);
}
else{
  echo json_encode($response);
}
