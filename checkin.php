

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
  <br><br>

  <?php
// define variables and set to empty values
$nameErr = $numberErr = $telErr = $roomErr=$date1Err =$date2Err = "";
$name = $number = $tel = $room = $date1=$date2="";

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

//password validation
if (empty($_POST["tel"])){
    $telErr = "Phone number is required";
}else{
    $tel = test_input($_POST["tel"]);
}

//numbervalidation
if (empty($_POST["number"])) {
    $numberErr = "number of occupants  required";
  } else {
    $number = test_input($_POST["number"]);
   
  }

//room confirmation
if (empty($_POST["room"])){
    $roomErr = "Enter room type";
}else{
    $room = test_input(($_POST["room"]));
} 

if (empty($_POST["date1"])){
    $dateErr = "Enter checkin date";
}else{
    $date = test_input(($_POST["date1"]));
} 
if (empty($_POST["date2"])){
    $date1Err = "Enter checkout date";
}else{
    $date1 = test_input(($_POST["date2"]));
} 

//
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>
<br><br><br>
  <section>
            <div class="form-container">
                <h1>Checkin</h1>
                <form action="" method="post" auto_comple="off" id="form">
                <div class="control">
                        <label for="name">Username</label>
                        <input type="text" name="name" id="name" placeholder="Username" value="<?php echo $name;?> "required>
                        <span class="error"> <?php echo $nameErr;?></span>
                    </div>
                    
                    

                    <div class="control">
                        <label for="phone">Tel</label>
                        <input type="tel" name="tel" id="tel" placeholder="Phone number" value="<?php echo $tel;?>">
                        <span class="error"> <?php echo $telErr;?></span>
                    </div>

                    <div class="control">
                        <label for="number">Mumber of Stedents</label>
                        <input type="number" name="number" id="number" placeholder="Number of students"  placeholder="Phone number" value="<?php echo $number;?>">
                        <span class="error"> <?php echo $numberErr;?></span>
                    </div>
                    <div class="control">
                      <label for="room">Type of room</label><br>
                      <select id="room" name="room" value="<?php echo $room;?>">
                       <option value="">Choose room</option>
                        <option value="dorm room">Dorm room</option>
                        <option value="Collage singles">Collage singles</option>
                        <option value="Private siingles">Private singles</option>
                        <option value="Hostel singles">hostel single</option>
                      </select>
                      <span class="error"> <?php echo $roomErr;?></span>
                    </div>

                    <div class="control">
                        <label for="amount">Amount</label>
                        <input type="amount" name="amount" id="amount" placeholder="Amount">
                        
                    </div>

                    <div class="control">
                        <label for="date">checkin date</label>
                        <input type="date" name="date1" id="date" placeholder="checkin date"required value="<?php echo $date1;?>" required>
                        <span class="error"> <?php echo $date1Err;?></span>
                    </div>
                    <div class="control">
                        <label for="date1">checkout date</label>
                        <input type="date" name="date2" id="date1" placeholder="checkout date" value="<?php echo $date2;?>" required>
                        <span class="error"> <?php echo $date2Err;?></span>
                    </div>
                    <div class="control">
                        <input type="submit" value="Checkin" name='submit'>
                    </div>
                </form>
                
            </div>
    </section>

    <?php
$server = "localhost";
$username = "root";
$password = "";
$database = "users";

//conncting to databese
$conn = mysqli_connect($server, $username, $password, $database);
//checking if conected to database
if(isset($_POST['submit'])){
  if(!empty($_POST['name']) && !empty($_POST['tel']) && !empty($_POST['number'])&& !empty($_POST['room'])&& !empty($_POST['amount'])&& !empty($_POST['date1'])&& !empty($_POST['date2'])){
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $number = $_POST['number'];
    $room = $_POST['room'];
    $amount = $_POST['amount'];
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];

    //inserting values to datadase

    $qeury = "insert into checkin(name, tel, number,room,amount,date1,date2) values('$name', '$tel', '$number', '$room', '$amount', '$date1', '$date2')";
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


        <br><br>
        <!--foooter-->
<br><br>
        <?php include 'includes/footer.php'?>
  <script src="javascript/script.js"></script>
  <script src="javascript/view.js"></script>
</body>
</html>