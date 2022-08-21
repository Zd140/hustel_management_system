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
  <br><br>

  <?php
// define variables and set to empty values
$nameErr = $numberErr = $telErr = $roomErr=$dateErr =$date1Err = "";
$name = $number = $tel = $room = $date=$date1="";

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

if (empty($_POST["date"])){
    $dateErr = "Enter checkin date";
}else{
    $date = test_input(($_POST["date"]));
} 
if (empty($_POST["date1"])){
    $date1Err = "Enter checkout date";
}else{
    $date1 = test_input(($_POST["date1"]));
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
                        <input type="number" name="number" id="number" placeholder="Number of students"required  placeholder="Phone number" value="<?php echo $number;?>">
                        <span class="error"> <?php echo $numberErr;?></span>
                    </div>
                    <div class="control">
                      <label for="room">Type of room</label><br>
                      <select id="room" name="room" value="<?php echo $room;?>" required>
                       <option value="">Choose room</option>
                        <option value="dorm">Dorm room</option>
                        <option value="single">Collage singles</option>
                        <option value="private">Private singles</option>
                        <option value="hostel">hostel single</option>
                      </select>
                      <span class="error"> <?php echo $roomErr;?></span>
                    </div>
                    <div class="control">
                        <label for="date">checkin date</label>
                        <input type="date" name="date" id="date" placeholder="checkin date"required value="<?php echo $date;?>" required>
                        <span class="error"> <?php echo $dateErr;?></span>
                    </div>
                    <div class="control">
                        <label for="date1">checkout date</label>
                        <input type="date" name="date1" id="date1" placeholder="checkout date" value="<?php echo $date;?>" required>
                        <span class="error"> <?php echo $date1Err;?></span>
                    </div>
                    <div class="control">
                        <input type="submit" value="Checkin">
                    </div>
                </form>
                
            </div>
    </section>
        <br><br>
        <!--foooter-->
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $tel;
echo "<br>";
echo $number;
echo "<br>";
echo $room;
echo "<br>";
echo $date;
echo "<br>";
echo $date1;

?>
        <?php include 'includes/footer.php'?>
  <script src="javascript/script.js"></script>
  <script src="javascript/view.js"></script>
</body>
</html>