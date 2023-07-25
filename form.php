<?php 
   
//   print_r($_POST);
// if(isset($_POST['name'] ) AND isset($_POST['email']) AND isset($_POST['phone'])){
    // if(isset($_POST['submit'])){
    // $name = $_POST['name'];
    //  $email = $_POST['email'];
    //  $phone = $_POST['phone'];
    // $items= $_POST['items'];
    // echo implode(',', $items);
    // echo "<br>";
    // echo implode(',', $_POST['skills']);
//    foreach($_POST['skills'] as $value){
//     echo "$value <br>";
//    }
// echo $name;
// echo "<br/>";
// }

/// Form Validation
$name= $phone = $email=$items=$skills="";
$nameErr = $phoneErr = $emailErr = $itemsErr= $skillsErr="";
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // $items= $_POST['items'];
  if(empty($_POST['name'])){
    $nameErr="Your name is required";
  }else{
    $name= $_POST['name'];
  }
  if(empty($_POST['phone'])){
    $phoneErr= "Your Phone is required";
  }else{
    $phone= $_POST['phone'];
  }
  if(empty($_POST['email'])){
    $emailErr= "Your email is required";
  }else{
    $email= $_POST['email'];
  }
 if( ! array_key_exists('items', $_POST)){
    $itemsErr= "you must select an item";
 }else{
    $items = implode(",", $_POST['items']);
 }
 if(! array_key_exists('skills', $_POST)){
    $skillsErr= "You must select a skill";
 }else{
    $skills = implode(",", $_POST['skills']);
 }
    
   // if()
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
            name : <br/> <input type="text" name="name"  value="<?php echo $name ?>">
        <span style="color:red"> <?php echo $nameErr  ?>  </span>
        </p>
        <p>
            email : <br/> <input type="text" name="email" value="<?php echo $email ?>" >
            <span style="color:red"> <?php echo $emailErr  ?>  </span>
        </p>
        <p>
            Phone : <br/> <input type="tel" name="phone" value="<?php echo $phone ?>" >
            <span style="color:red"> <?php echo  $phoneErr ?>  </span>
        </p>
        <p>
         Items : <br/> <input type="checkbox" name="items[]" value="tv"> TV
         <input checked type="checkbox" name="items[]" value="radio"> Radio
         <input  checked type="checkbox" name="items[]" value="phone"> Phone
         <span style="color:red"> <?php echo $itemsErr  ?>  </span>
        </p>
        <p>
            Programming Skills <br>
            <select name="skills[]" multiple>
            <option value="PHP">PHP</option>
            <option value="JS">JS</option>
            <option value="C">C</option>
            <option value="C++"> C</option>

            </select>
            <span style="color:red"> <?php echo $skillsErr  ?>  </span>
        </p>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>
