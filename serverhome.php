<?php 
session_start();
if($_SESSION['role'] != 'admin'){
  header('location:login.php');
}
require_once 'database.php';
$sql = "SELECT * FROM user";
$select = mysqli_query($conn, $sql);
// $users =[];
//  while( $result=mysqli_fetch_assoc($select)){
//     $users[]= $result;
//  }

$users=mysqli_fetch_all($select, MYSQLI_ASSOC);
if(isset($_POST['delete'])){
  $delete_email=$_POST['email'];
  $conn->query("DELETE FROM user WHERE email='$delete_email'");
}