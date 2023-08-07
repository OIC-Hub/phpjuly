<?php 
session_start();
require_once('database.php');
if(isset($_GET['id'])){
    $id= $_GET['id'];

}else{
    header('location:index.php');
}
$sql= "SELECT * from user where id =?";
$stm = $conn->prepare($sql);
$stm->bind_param('s', $id);
$stm->execute();
$result= $stm->get_result();
$user = $result->fetch_assoc();
if( isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $idd = $_POST['idd'];

$sql="UPDATE user SET name='$name', email ='$email', phone='$phone' WHERE id='$idd'";
 if($conn->query($sql)){
    header('location:index.php');
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Update</title>
</head>
<body>
<h2> User Update </h2>
    <form action="" method="post">
        <input type="hidden" name="idd"  value="<?php echo $user['id'] ?>">
        <p>
            name : <br/> <input type="text" name="name"  value="<?php echo $user['name'] ?>">

        <p>
            email : <br/> <input type="text" name="email" value="<?php echo $user['email']  ?>" >
              </p>
        <p>
            Phone : <br/> <input type="tel" name="phone" value="<?php echo $user['phone']  ?>" >
            <span style="color:red"> <?php  ?>  </span>
        </p>
   </p> 
  <input type="submit" name="update" value="Update">
    </form>
</body>
</html>