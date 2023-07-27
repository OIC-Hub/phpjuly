 <?php 
require_once "database.php";
 $errors =[];
 $data =[];
if(isset($_POST['submit'])){
    if(empty($_POST['name'])){
    $errors['nameErr'] = "Your name is required";
    }else{
        $data['name'] = $_POST['name'];
    }
    if(empty($_POST['phone'])){
        $errors['phoneErr'] = "Your phone is required";
        }else{
            $data['phone'] = $_POST['phone'];
        }
        if(empty($_POST['email'])){
            $errors['emailErr'] = "Your email is required";
            }else{
                $data['email'] = $_POST['email'];
            }
            $name = $data['name'];
            $email = $data['email'];
            $phone = $data['phone'];
            $pass = md5('peace');
            $date = date("Y-m-d h:i:s a");
            if(count($errors) == 0){
                $sql = "INSERT INTO user(name, email, password, phone, dateregistered) VALUES('$name', '$email', '$pass', '$phone', '$date')";
              if(mysqli_query($conn,  $sql)){
                echo "Data submitted successfully";
              }else{
                echo "Something went wrong". mysqli_error($conn);
              }
            }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Submit</title>
</head>
<body>
    <h2> Registration Page </h2>
    <form action="formsubmi.php" method="post">
        <p>
            name : <br/> <input type="text" name="name"  value="<?php echo array_key_exists('name', $data) ? $data['name'] : '' ?>">
        <span style="color:red"> <?php echo array_key_exists('nameErr', $errors) ? $errors['nameErr'] : '' ?>  </span>
        </p>
        <p>
            email : <br/> <input type="text" name="email" value="<?php  ?>" >
            <span style="color:red"> <?php   ?>  </span>
        </p>
        <p>
            Phone : <br/> <input type="tel" name="phone" value="<?php  ?>" >
            <span style="color:red"> <?php  ?>  </span>
        </p>

   </p> 
  <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>