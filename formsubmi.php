 <?php 
require_once "database.php";
 $errors =[];
 $data =[];
if(isset($_POST['submit'])){
   $tmp_name= $_FILES['picture']['tmp_name'];
   $name= $_FILES['picture']['name'];
   $size= $_FILES['picture']['size'];
   $path = 'upload/' . $name;
   $pathEx = pathinfo($path, PATHINFO_EXTENSION);
//   if($pathEx !='jpg' && $pathEx !='jpeg' && $pathEx !='png'){
//     echo "Your file must be an image";
//   }
//     if($size > 1024){
//       echo "The size of the file is too big"; 
//     }else{
//         if(move_uploaded_file($tmp_name, $path)){
//             echo 'Uploaded successfully';
//            }
//     }
    if(empty($_POST['name'])){
    $errors['nameErr'] = "Your name is required";
    }else{
        $data['name'] = $_POST['name'];
    }
    if(empty($_POST['phone'])){
        $errors['phoneErr'] = "Your phone is required";
        }else{
           }
        if(empty($_POST['email'])){
            $errors['emailErr'] = "Your email is required";
            }else{
                $data['email'] = $_POST['email'];
            }
            $name = $data['name'];
            $email = $data['email'];
            $phone = $_POST['phone'];
            $pass = md5('peace');
            $date = date("Y-m-d h:i:s a");
            if(count($errors) == 0){

                if(move_uploaded_file($tmp_name, $path)){      
             //Conditional Selection
               $sql = "SELECT email FROM user WHERE email ='$email'";
               $select = mysqli_query($conn, $sql);
                if(mysqli_num_rows($select) == 0){
                $sql = "INSERT INTO user(name, email, password, phone, dateregistered, path) VALUES('$name', '$email', '$pass', '$phone', '$date', '$path')";
              if(mysqli_query($conn,  $sql)){
                echo "Data submitted succes'sfully";
              }else{
                echo "Something went wrong". mysqli_error($conn);
              }
            }else{
                $errors['emailErr'] ="Your email is already exist";
            }
            }else{
                echo "Unable to upload file";
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
    <form action="formsubmi.php" method="post" enctype="multipart/form-data">
        <p>
            name : <br/> <input type="text" name="name"  value="<?php echo array_key_exists('name', $data) ? $data['name'] : '' ?>">
        <span style="color:red"> <?php echo array_key_exists('nameErr', $errors) ? $errors['nameErr'] : '' ?>  </span>
        </p>

        <p>File <input type="file" name="picture"></p>
        <p>
            email : <br/> <input type="text" name="email" value="<?php  ?>" >
            <span style="color:red"> <?php echo array_key_exists('emailErr', $errors) ? $errors['emailErr'] : '' ?>  </span>
        </p>
        <p>
            Phone : <br/> <input type="tel" name="phone" value="" >
            <span style="color:red"> <?php  ?>  </span>
        </p>

   </p> 
  <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>