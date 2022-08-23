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
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  
</head>
<body>
  <?php include 'includes/header.php'?>

  <section>
            <div class="form-container">
                <h1>Uer Profile</h1>
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
                        <input type="submit" value="Edit prifile">
                    </div>
                </form>
                
            </div>
        </section>
        <!--foooter-->
        <?php include 'includes/footer.php'?>
  <script src="javascript/script.js"></script>
  <script src="javascript/view.js"></script>
</body>
</html>