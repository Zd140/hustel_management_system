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

  <?php
// define variables and set to empty values
$nameErr = $emailErr = $passwordErrr = $password2Err="";
$name = $email = $password = $password2 = "";

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
if (empty($_POST["password"])){
    $passwordErrr = "Password is required";
}else{
    $password = test_input($_POST["password"]);
}
if (strlen($password) < 8){
    $passwordErrr = "8 characters min required";

}

//password confirmation
if (empty($_POST["password2"])){
    $password2Err = "Confirm Password";
}else{
    $password2 = test_input(($_POST["password2"]));
} 

if($password2 !== $password){
    $password2Err = "Password doesn't match";
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
                <h1>add user</h1>
                <form action="" method="post" auto_comple="off" id="form">
                    <div class="control">
                        <label for="name">Username</label>
                        <input type="text" name="name" id="name" placeholder="Username" value="<?php echo $name;?>">
                        <span class="error"> <?php echo $nameErr;?></span>
                    </div>
                    <div class="control">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="example@gmail.com" value="<?php echo $email;?>">
                        <span class="error"> <?php echo $emailErr;?></span>
                    </div>
                    
                    <div class="control">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password"placeholder="Password" value="<?php echo $password;?>">
                        <span class="error"> <?php echo $passwordErrr;?></span>
                    </div>
                    <div class="control">
                        <label for="password2">Password</label>
                        <input type="password" name="password2" id="password2"placeholder="Password2" value="<?php echo $password2;?>">
                        <span class="error"> <?php echo $password2Err;?></span>
                    </div>
                    <div class="control">
                        <input type="submit" value="submit"name = "submit">
                    </div>
                </form>
                
            </div>
        </section>
        <!--foooter-->
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "users";
//conncting to databese
$conn = mysqli_connect($server, $username, $password, $database);

//checking if conected to database
if(isset($_POST['submit'])){
  if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //inserting values to datadase

    $qeury = "insert into registered(name, email, password) values('$name', '$email', '$password')";
    $run = mysqli_query($conn, $qeury) or die(mysqli_error());

    if($run){
        header('location:dashboard2.php');
    }else{
        echo "<script>alert('not succesful')</script>";
    }
  }else {
    echo "<script>alert('all input field required')</script>";
  }
}
?>

 
  <script src="javascript/script.js"></script>
  <script src="javascript/view.js"></script>

</body>
</html>