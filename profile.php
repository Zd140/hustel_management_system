<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/profile.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  
</head>
<body>
  <?php include 'includes/header.php'?>

    <section>
        <div class="profile-container">
            <div class="user_icon">
                <img src="pics/profile.jpg" alt="" >
            </div>
            <div class="user_info">
                <label for="username">User name:</label>
                <span class="user-info"> John doe</span>
            </div>

            <div class="user_info">
                <label for="username">Email:</label>
                <span class="user-info">Johndoe@gamil.com</span>
            </div>

            <div class="user_info">
                <label for="username">Password:</label>
                <span class="user-info">............</span>
            </div>

            <div class="user_info">
                <label for="username">Phone number:</label>
                <span class="user-info">658421744</span>
            </div>
            <div class="updates">
                <div class="bot-1"><button>Edit</button></div>
                <div class="bot-2"><button>save</button></div>
            </div>
        </div>
     </section>
    <!--foooter-->
    <?php include 'includes/footer.php'?>
  <script src="javascript/script.js"></script>
  <script src="javascript/view.js"></script>
</body>
</html>