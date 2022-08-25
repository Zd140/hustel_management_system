<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/dash2.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo-name">
            <div class="logo-image">
              <img src="tes.jpg" alt="logo">
             
            </div>
            <span class="logo_name">
              Royalhostel
            </span>
          </div>
        <a class="active" href="dashboard2.php">dashboard</a>
        <a href="checked.php">Checkedin users</a>
        <a href="contact2.php">Contacted Users</a>
        <a href="viewr.php">Added rooms</a>
        <a href="profile.php">Adim profile</a>
        <a href="#about">login user</a>
        <a href="logout.php" class=""> <i class="uil uil-signout"></i>logout</a>
        
      </div>
      
      <div class="content">
       <div class="search">
          <input type="text" placeholder="search.....">
       </div>

        <div class="dash-content">
            <div class="overview">
              <div class="title">
              <i class="uil uil-tachometer-fast-alt"></i>
                <span class="text">dashboard</span> 
              </div>
      
              <div class="boxes">
                <div class="box box1">
                  <i class="fa fa-home" style="font-size:30px;"></i> 
                  <span>Total students</span>
                  <span class="numbers">100</span>
                </div>
      
                <div class="box box2">
                  <i class="fa fa-home" style="font-size:30px;"></i> 
                  <span>Total rooms</span>
                  <span class="numbers">100</span>
                </div>
      
                <div class="box box3">
                  <i class="fa fa-home" style="font-size:30px;"></i> 
                  <span>Total rooms left</span>
                  <span class="numbers">100</span>
                </div>
            </div>
        </div>
        <div class="activity">
            <div class="title">
            <i class="uil uil-user"></i> 
              <span class="text">Added rooms</span> 
              <div class="text" style="margin-left:250px;"> <button class="edit1" style="width:90px;"><a href="addroom.php" style="text-decoration: none;">add room</a></button></div>
        </div>
         
<div style="overflow-x:auto;">
<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "users";
session_start();
//conncting to databese
$conn = mysqli_connect($server, $username, $password, $database);

$query = "SELECT * FROM rooms";
$query_run = mysqli_query($conn,$query);
?>
    <table>
      <thead>
      <tr>
        <th>User ID</th>
        <th>Room type</th>
        <th>Number of occupants</th>
        <th>Amount per room</th>
        <th>picture</th>
        <th>Operations</th>

        
      </tr>
      </thead>
      <tbody>
        <?php
         if(mysqli_num_rows($query_run) > 0){
          while($row = mysqli_fetch_assoc($query_run))
          {
           ?>
           
          
      <tr>
        <td><?php  echo  $row['id'];  ?></td> 
        <td><?php echo  $row['name']; ?></td> 
        <td> <?php echo  $row['number']; ?> </td>
        <td> <?php echo  $row['amount']; ?> </td>
        <td> <?php echo  $row['picture']; ?></td>
        
        <td>
        <button class="edit">Edit</button>
          <button class="delite">Delite</button>
          
        </td>
      </tr>
      <?php
          }
          
         }
         else{
          echo"Norecord found";
        }
        ?>
      </tbody>
      
    </table>
  </div>

      </div>
      
</body>
</html>