<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Methods</title>
</head>
<body>
    <?php
    $numbers=[12, 34, 56,78,90];
    echo  $numbers[0];
    // methods
    array_push($numbers, '45', '67', '89');
    
    $numbers[count($numbers)] ='Dami';
   
   array_pop($numbers);
   print_r($numbers);
   array_shift($numbers);
   echo "<br>";
   print_r($numbers);
array_unshift($numbers, '45', 'Tayo');
print_r($numbers);
echo "<br>";
sort($numbers); 
print_r($numbers);
    ?>
</body>
</html>