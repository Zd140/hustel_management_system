<?php
$server = "localhost";
$username = "root";
$password = "4ULgJ5XjDGda";
$database = "users";
session_start();
//conncting to databese
$conn = mysqli_connect($server, $username, $password, $database);

//checking if conected to database
if(isset($_POST['delete_btn'])){
  $id = $_POST['delete_id'];

  $query = "DELETE  FROM checkin WHERE id = '$id'";
  $query_run = mysqli_query($conn, $query);

  if($query_run){
        $_SESSION['succes'] = "user is deleted";
        header('location:checked.php');
  }else{
    $_SESSION['status'] = "user is not deleted";
    header('location:dashboard2.php');
  }
}
?>