<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<style>
.bot{
  background: red;
    color: #fff;
    border:none;
    font-size: 1.2em;
    opacity: .7;
    transition: opacity .3s ease;
    height: 50px;
    margin:20px;
    border-radius:10px;
    display:center;
}
.bot:hover{
  background:white;
  color:red;
}

</style>

<body>
  <?php include 'includes/header.php'?>
    
    <!--main-->
  <div class="w3-container text w3-center w3-text-white text1">
    <h1>Sleep save and <span>secured</span></h1>
    <h2>Welcome to cameroon's No.1</h2>
</div>
<!--categories-->
<div class="w3-container">
    <table class="w3-table-all w3-card-4">
        <tr>
          <th>Room categoris</th>
          <th>prices <b>(FCFA)</b></th>
        </tr>
        <tr>
          <td>Collage hostel room</td>
          <td>20 000.0</td> 
        </tr>
        <tr>
          <td>Hostel single rooms</td>
          <td>15 000.0</td>
        </tr>
        <tr>
          <td>Dorm rooms</td>
          <td>20 000.0</td>
        </tr>
        <tr>
          <td>Private single room</td>
          <td>25 000.0</td>
        </tr>
      </table>
    </div>
</div>
<br>
<!--ROOM DISPLAY AS SPECIFIED ABOVE-->
<div class="w3-container" style="background-color: rgba(255, 255, 255, 0.7);">
  <!--collage hostel rooms-->
  <button class="bot" title="click to view room discription"><a href="collage.php"><h2>collage rooms</h2></a></button>
      <div class="w3-row-padding w3-margin-top">
        <div class="w3-third">
          <div class="w3-card">
            <img src="pics/pic11.jpg" style="width:100%">

          </div>
      </div>

        <div class="w3-third">
          <div class="w3-card">
            <img src="pics/pic12.jpg" style="width:100%">
            
          </div>
        </div>

        <div class="w3-third">
          <div class="w3-card">
            <img src="pics/pic14.jpg" style="width:100%; height:331px;">
            
          </div>
        </div>
      </div>
      <button class="bot"><a href="hostel.php "title="click to view room discription"><h2>Hostel rooms</h2></a></button>
      <div class="w3-row-padding w3-margin-top">
        <div class="w3-third">
          <div class="w3-card">
            <img src="pics/pic28.jpg" style="width:100%; height:293px;">
          </div>
        </div>

        <div class="w3-third">
          <div class="w3-card">
            <img src="pics/pic29.jpg" style="width:100%; height:293px;">
          </div>
        </div>

        <div class="w3-third">
          <div class="w3-card">
            <img src="pics/pic30.jpg" style="width:100%; height:293px;">
          </div>
        </div>
      </div>

      <button class="bot"><a href="dorm.php"title="click to view room discription"><h2>Dorm rooms</h2></a></button>
      <div class="w3-row-padding w3-margin-top">
        <div class="w3-third">
          <div class="w3-card">
            <img src="pics/pic12.jpg" style="width:100%; height:293px;">
          </div>
        </div>

        <div class="w3-third">
          <div class="w3-card">
            <img src="pics/pic13.jpg" style="width:100%; height:293px;">
          </div>
        </div>

        <div class="w3-third">
          <div class="w3-card">
            <img src="pics/pic14.jpg" style="width:100%; height:293px;">
          </div>
        </div>
      </div>

      <button class="bot"><a href="private.php"title="click to view room discription"><h2> Private single rooms</h2></a></button>
      <div class="w3-row-padding w3-margin-top">
        <div class="w3-third">
          <div class="w3-card">
            <img src="pics/pic2.jpg" style="width:100%; height:293px;">
          </div>
        </div>

        <div class="w3-third">
          <div class="w3-card">
            <img src="pics/pic21.jpg" style="width:100%; height:293px;">
          </div>
        </div>

        <div class="w3-third">
          <div class="w3-card">
            <img src="pics/pic22.jpg" style="width:100%; height:293px;">
          </div>
        </div>
      </div><br>
        <div class="w3-container w3-center"><a href="checkin.php"><button type="button" class="w3-blue view">click to check in</button></a></div>
      <!---->
</div><br>
<!--footer-->
<?php include 'includes/footer.php'?>
  <script src="javascript/script.js"></script>
  <script src="javascript/view.js"></script>
</body>
</html>