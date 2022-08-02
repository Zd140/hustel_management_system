<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <?php include 'includes/header.php'?>
<br><br><br>
      <!--form-->
      <div class="w3-container">
  <div class="container">
  <h2 class="w3-center">Login</h2>
  <form action="/action_page.php">


  <div class="row">
    <div class="col-25">
      <label for="username">User name</label>
    </div>
    <div class="col-75">
      <input type="text" id="username" name="username" placeholder="username">
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="email" id="email" name="email" placeholder="example@gmail.com">
    </div>
  </div>

       <div class="row">
          <div class="col-25">
            <label for="password">Password</label>
          </div>
          <div class="col-75">
            <input type="password" id="password" name="password" placeholder="Password" required>
          </div>
        </div>

       



  

  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  <br>
  <div class="w3-container w3-center"><span class="link">Not a member?<a href="sign.php">Register</a></span></div>
  </form>
</div>

  </div>
  <br><br><br>
      
      
        <!--foooter-->
        <?php include 'includes/footer.php'?>
  <script src="javascript/script.js"></script>
  <script src="javascript/view.js"></script>
</body>
</html>