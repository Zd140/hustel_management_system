<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/add.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container">
  <form method = "post" action="" >
  <div class="row">
    <div class="col-25">
      <label for="name">Room type</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="name">
    </div>

  </div>
  <div class="row">
    <div class="col-25">
      <label for="number">number of accupants</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="number">
    </div>

  </div>
  <div class="row">
    <div class="col-25">
      <label for="amount">amount</label>
    </div>
    <div class="col-75">
      <input type="text" id="amount" name="amount">
    </div>

  </div>

  <div class="row">
    <div class="col-25">
      <label for="subject"></label>
      <input type="picture" id="lname" name="picture">
    </div>
    <div class="col-75">
     
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Submit" name="submit">
  </div>
  </form>
</div>


<?php
$server = "localhost";
$username = "root";
$password = "4ULgJ5XjDGda";
$database = "users";

//conncting to databese
$conn = mysqli_connect($server, $username, $password, $database);
//checking if conected to database
if(isset($_POST['submit'])){
  if(!empty($_POST['name']) && !empty($_POST['number']) && !empty($_POST['amount'])&& !empty($_POST['picture'])){

    $name = $_POST['name'];
    $number = $_POST['number'];
    $amount = $_POST['amount'];
    $picture = $_POST['picture'];
    

    //inserting values to datadase

    $qeury = "insert into rooms(name, number, amount,picture) values('$name', '$number', '$amount', '$picture')";
    $run = mysqli_query($conn, $qeury) or die(mysqli_error($conn));

    if($run){
      header('location:viewr.php');
     
    }else{
      echo "<script>alert('submition unsuccesfull')</script>";
    }
  }else {
    echo "<script>alert('all input field required')</script>";
  }
}

?>
</body>
</html>