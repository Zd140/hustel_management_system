<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Profile</title>
</head>
<body>
    <!--header--->
    <?php include 'includes/header.php'?>
    <br>
    
    <div class="w3-container">
  <div class="container">
  <img src="pics/pic4.jpg" alt="Paris" width="300" height="300" class="w3-center" style="border-radius:50%;"><br>
    <button type="">Upload image</button>
      <h2 class="w3-center">Profile</h2>
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
                <label for="number">Phone number</label>
              </div>
              <div class="col-75">
                <input type="" id="number" name="number" placeholder="+237 655 40 56 73" required>
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
            <input type="submit" value="Edit profile">
          </div>
          <br>
      
      </form>
</div>
</div>


    <!--footer--->
    <?php include 'includes/footer.php'?>
    <script src="javascript/script.js"></script>
  <script src="javascript/view.js"></script>
</body>
</html>