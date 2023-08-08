<?php 
require 'serverhome.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<h1>USers Page</h1>
 <!-- List group -->
 <table class="table">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sn=1;
foreach( $users as $user){
  
?>
    <tr>
      <th scope="row"><?php echo $sn++ ?></th>
      <td><?php echo $user['name'] ?></td>
      <td><?php echo $user['email'] ?></td>
      <td><?php echo $user['phone'] ?></td>
       <td>
         <a href="userupdate.php?id=<?php echo $user['id'] ?>" style="text-decoration: none; display:inline-block; padding:2%; color:white; background-color:orange; border-radius:5%;">Update</a> ||
          <form action="index.php" method="post" style="display: inline-block;">
          <input type="hidden" name="email" value="<?php echo $user['email']?>">
          <input type="submit" value="Delete" name="delete">
         </form>
       </td>

    </tr>
    <?php 
};
 ?>
  
  </tbody>
</table>

 

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>