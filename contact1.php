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
  <?php
// define variables and set to empty values
$nameErr = $emailErr = $telErr = $messageErr="";
$name = $email = $tel = $message = "";

//username validation
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (empty($_POST["name"])) {
      $nameErr = "Username is required";
    } else {
      $name = test_input($_POST["name"]);
      // check if user$username only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }

//emailvalidation
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
}

//password validation
if (empty($_POST["tel"])){
    $telErr = "Phone number is required";
}else{
    $tel = test_input($_POST["tel"]);
}


//password confirmation
if (empty($_POST["message"])){
    $messageErr = "Required";
}else{
    $message = test_input(($_POST["message"]));
} 



//
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>
  <section>
            <div class="form-container">
                <h1>contact us
                
                </h1>
                <form action="" method="post" auto_comple="off" id="form">
                    <div class="control">
                        <label for="name">Username</label>
                        <input type="text" name="name" id="name" placeholder="Username" required >
                        <span class="error"> <?php echo $nameErr;?></span>
                    </div>
                    
                    <div class="control">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="example@gmail.com" >
                        <span class="error"> <?php echo $emailErr;?></span>
                    </div>

                    <div class="control">
                        <label for="phone">Tel</label>
                        <input type="tel" name="tel" id="tel" placeholder="Phone number" >
                        <span class="error"> <?php echo $telErr;?></span>
                    </div>
                    <div class="control">
                        <label for="text" value="<?php echo $message;?>">Comment</label>
                        <textarea name="message" ></textarea>
                        <span class="error"> <?php echo $messageErr;?></span>
                    </div>
                    
                    <div class="control">
                        <input type="submit" value="contact"  name="submit">
                    </div>
                </form>
                
            </div>
        </section>
<br><br>
        <?php
$server = "localhost";
$username = "root";
$password = "4ULgJ5XjDGda";
$database = "users";

//conncting to databese
$conn = mysqli_connect($server, $username, $password, $database);
//checking if conected to database
if(isset($_POST['submit'])){
  if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['tel'])&& !empty($_POST['message'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];
    

    //inserting values to datadase

    $qeury = "insert into contact(name, email, tel,message) values('$name', '$email', '$tel', '$message')";
    $run = mysqli_query($conn, $qeury) or die(mysqli_error($conn));

    if($run){
      echo "<script>alert('submition succesfull')</script>";
     
    }else{
      echo "<script>alert('submition unsuccesfull')</script>";
    }
  }else {
    echo "<script>alert('all input field required')</script>";
  }
}

?>

        <!--foooter-->
        <?php include 'includes/footer.php'?>
  <script src="javascript/script.js"></script>
  <script src="javascript/view.js"></script>
</body>
</html>