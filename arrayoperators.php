<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Array operators</title>
</head>
<body>
    
<?php 
 $a = 2 > 6? 'Ramon': 23;
//  $c= false?? 'error';
//  echo $c;
 echo "<br>";
 echo $a;
//array

$name = array("Dotun", 'Ramon', 'Ibrahim');

$num = array(12, 45, 3, 6,9,0);
 print_r($name + $num);

 if($name <> $num){
    echo "The same array";
 }else{
    echo "Not valid numbers";
 }
?>
</body>
</html>