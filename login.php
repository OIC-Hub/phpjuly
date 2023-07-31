<?php 
require "database.php";
if(isset($_POST['login'])){
$email = $_POST['email'];
$password = md5($_POST['password']);
 
$sql = "SELECT * FROM user WHERE email='$email'";
 $select= $conn->query($sql);
 if($select->num_rows > 0){
    $result = $select->fetch_assoc();
    if(strcmp($password, $result['password'])==0){
        header('location:index.php');
    }else{
        echo "Invalid details";
    }
 }else{
    echo "Invalid Email";
 }
   

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Page</h1>
<form action="" method="post">
    <p>Email: <br> <input type="email" name="email"></p>
    <p>Password: <br> <input type="password" name="password"></p>
    <input type="submit" value="Login" name="login">
</form>
</body>
</html>