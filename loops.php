<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
//     $result ="";
//    $table= 3;
//    $multiplier = 1;
//     do{
//         $ans= $table * $multiplier;
//        $result .= "$table X $multiplier = $ans <br> ";
//        $multiplier++;
//     }while( $multiplier <=12 );
//     echo $result;
    // $i=1;
    // $text="";
    // while($i <=1000){
    //   if($i % 2 == 0){
    //     $text .= "$i is even number <br/>";
    //   }else{
    //     $text .= "$i is odd number <br/>";
    //   }
    //   $i++;
    // }
    // echo $text;
    //  $score = array (18, 100, 30);
    // $new_score =[];
    // $len= count($score);
    //  for($i=0; $i < $len ; ++$i){
    //    $new_score[$i]=$score[$i];
    //  } 
    // print_r($new_score);

    $number=[45, 56, 676, 78, 89];
    $num =[];
    $i=0;
    foreach( $number as $value){
        // echo "$value <br>";
        $num[$i] = $value;
        $i++;
    }
    print_r($num);
   echo "<br>";
    $user = array("name" => "Dotun Olowoeja", "age" => 50 );
   foreach($user as $key => $value){
    echo " $key: $value <br>";
   }
    ?>
</body>
</html>