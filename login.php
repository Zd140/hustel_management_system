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
  <?php include 'include/header.php'?>

  <?php
// define variables and set to empty values
$nameErr = $passwordErrr = $password2Err="";
$name  = $password = $password2 = "";

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
}
//emailvalidation


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
                <h1>login</h1>
                <form action="" method="POST" auto_comple="off" id="form">
                    <div class="control">
                        <label for="name">Username</label>
                        <input type="text" name="name" id="name" placeholder="Username" value="<?php echo $name;?>">
                        <span class="error"> <?php echo $nameErr;?></span>
                    </div>
                    
                    
                    <div class="control">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password"placeholder="Password" value="<?php echo $password;?>">
                        <span class="error"> <?php echo $passwordErrr;?></span>
                    </div>
                    
                    <span><input type="checkbox" name="" id="">Remeber me </span>
                    <div class="control">
                        <input type="submit" name="submit" value="login">
                    </div>
                </form>
                <div class="link">
                   <span>Already have an account ?<a href="login.php">login</a></span> 
                </div>
            </div>
        </section>
        <!--foooter-->

<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "users";
    session_start();
    //conncting to databese
    $conn = mysqli_connect($server, $username, $password, $database);

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST["name"];
        $password = $_POST["password"];

        $sql = "select * from registered where name ='".$name."' AND password ='".$password."' ";

        $result = mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);

        if($row['usertype'] === "user"){
            header('location:welcome.php');
        }
        elseif($row['usertype'] === "admin"){
            header('locatiion:dashboard.php');
        }else{
            echo"<script>alert('invalid login details')</script>";
        }
    }
?>
        <?php include 'includes/footer.php'?>
  <script src="javascript/script.js"></script>
  <script src="javascript/view.js"></script>

</body>
</html>