<?php 
   
//   print_r($_POST);
// if(isset($_POST['name'] ) AND isset($_POST['email']) AND isset($_POST['phone'])){
    if(isset($_POST['submit'])){
    $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
echo $name;
echo "<br/>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>
<body>
    <form action="form.php" method="post">
        <p>
            name : <br/> <input type="text" name="name" >
        </p>
        <p>
            email : <br/> <input type="text" name="email" >
        </p>
        <p>
            Phone : <br/> <input type="tel" name="phone" >
        </p>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>
