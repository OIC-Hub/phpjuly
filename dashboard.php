<?php 
session_start();

require 'database.php';
if(!isset($_SESSION['email'])){
    header('location:login.php');
}

$email =$_SESSION['email'];
$sql = "SELECT name, phone, email, path from user WHERE email=?";
$stm = $conn->prepare($sql);
  $stm->bind_param('s', $email);
  $stm->execute();
  $result = $stm->get_result();
  $user= $result->fetch_assoc();
//   print_r($user);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <p> <a href="logout.php"> Logout</a></p>
    <p><img src="upload/profile/<?php echo $user['path'] ?>" width="200px" ></p>
    <p>name: <?php echo  $user['name']  ?></p>
    <p> Email:<?php echo  $user['email']  ?></p>
    <p>Phone: <?php echo  $user['phone']  ?></p>
   
</body>
</html>