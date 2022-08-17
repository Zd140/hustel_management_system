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
                <form action="">
                    <div class="control">
                        <label for="name">Username</label>
                        <input type="text" name="name" id="name" placeholder="Username">
                    </div>
                    <div class="control">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="example@gmail.com">
                    </div>
                    
                    <div class="control">
                        <label for="psw">Password</label>
                        <input type="password" name="psw" id="psw"placeholder="Password">
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