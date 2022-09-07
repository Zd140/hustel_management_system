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
        <a href="contact2.php">Contact users</a>
        <a href="viewr.php">Added rooms</a>
        <a href="#contact">Adim profile</a>
        
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
              <span class="text">Registered members</span> 
              <div class="text" style="margin-left:250px;"> <button class="edit1" style="width:90px;"><a href="adduser.php" style="text-decoration: none;">Adduser</a></button></div>
        </div>
         
<div style="overflow-x:auto;">
<?php

$server = "localhost";
$username = "root";
$password = "4ULgJ5XjDGda";
$database = "users";
session_start();
//conncting to databese
$conn = mysqli_connect($server, $username, $password, $database);

$query = "SELECT * FROM registered";
$query_run = mysqli_query($conn,$query);
?>
    <table>
      <thead>
      <tr>
        <th>User ID</th>
        <th>User name</th>
        <th>Email</th>
        <th>Password</th>
        <th>User-type</th>
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
        <td><?php  echo  $row['ID'];  ?></td> 
        <td><?php echo  $row['name']; ?></td> 
        <td> <?php echo  $row['email']; ?> </td>
        <td> <?php echo  $row['password']; ?> </td>
        <td> <?php echo  $row['usertype']; ?></td>
        <td>
          <form action="code1.php" method="post">
            <input type="hidden" name="delete_id" value="<?php  echo  $row['ID'];  ?>">
              <button class="delite" name="delete_btn">Delete</button>
          </form>
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