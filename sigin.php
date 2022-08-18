<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/forms.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>
  <?php include 'includes/header.php'?>

  <section>
            <div class="form-container">
                <h1>Register</h1>
                <form action="" method="post" auto_comple="off">
                    <div class="control">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username">
                        <div class="error"></div>
                    </div>
                    <div class="control">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="example@gmail.com">
                        <div class="error"></div>
                    </div>
                    
                    <div class="control">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password"placeholder="Password">
                        <div class="error"></div>
                    </div>
                    <div class="control">
                        <label for="password2">Password</label>
                        <input type="password2" name="password2" id="password2"placeholder="Password2">
                        <div class="error"></div>
                    </div>
                    <div class="control">
                        <input type="submit" value="Register">
                    </div>
                </form>
                <div class="link">
                   <span>Already have an account ?<a href="login.php">login</a></span> 
                </div>
            </div>
        </section>
        <!--foooter-->
        <?php include 'includes/footer.php'?>
  <script src="javascript/script.js"></script>
  <script src="javascript/view.js"></script>
</body>
</html>