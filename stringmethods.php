<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String </title>
</head>
<body> 
    <?php
      $name="Sunday OPeyemi";
      $address ="Osogbo";
      $qoute =" <p style='color:red'>\"If you don't have a goal.....\" </p>";

      echo $qoute;
     $word ="Welcome to PHP class,  $address
     " . ",   $name";
     echo $word;

     // PHP Methods
      $fullname="Sunday OPeyemi Omolewu";
      echo "<br>";
      echo strlen($fullname);
      echo "<br>";
      echo str_word_count($fullname);
      echo "<br>";
      echo  strcmp("sunday","sunday");
      echo "<br>";
      echo crypt("Hello Word", 'obaalafinoyo oropoto niyu');
      echo "<br>";
     $password1= md5("osogbo");
     $password2= md5("osogbo");
     echo $password1, 'break...', $password2;
     echo "<br>";
     echo strcmp($password1, $password2);
     echo "<br>";
     $link = "<a href='gdgdgddg.com'>Facebook</a>";
     echo  $link;
     echo "<br>";
    $lin= htmlentities($link);
    echo  $lin;
    echo "<br>";
   echo html_entity_decode($lin );
    echo  str_replace("Sunday", 'Peace', $fullname);
    

   ?>  
</body>
</html>