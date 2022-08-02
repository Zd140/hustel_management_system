<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <?php include 'includes/header.php'?>

      <!--form-->
  <div class="w3-container">
    <div class="w3-container">
    <div class="container">
        <h2 class="w3-center">Contact Us <i class="fa fa-address-card-o" style="font-size:24px"></i></h2>
        <form action="/action_page.php">


        <div class="row">
          <div class="col-25">
            <label for="username">User name</label>
          </div>
          <div class="col-75">
            <input type="text" id="username" name="username" placeholder="User name" required>
          </div>
        </div>


        <div class="row">
          <div class="col-25">
            <label for="password">Password</label>
          </div>
          <div class="col-75">
            <input type="password" id="password" name="password" placeholder="Password" required>
          </div>
        </div>


        <div class="row">
          <div class="col-25">
            <label for="country">Region</label>
          </div>
          <div class="col-75">
            <select id="country" name="country">
            <option></option>
              <option value="southwest">South_west</option>
              <option value="norhwest">North_west</option>
              <option value="litoral">Litoral</option>
              <option value="north">North</option>
              <option value="adamawa">Adamawa</option>
              <option value="farnorth">far_north</option>
              <option value="east">East</option>

            </select>
          </div>
        </div>


        <div class="row">
          <div class="col-25">
            <label for="subject">Subject</label>
          </div>
          <div class="col-75">
            <textarea id="subject" name="subject" placeholder="Any issues fell free to ask" style="height:200px"></textarea>
          </div>
        </div>


        <br>
        <div class="row">
          <input type="submit" value="Submit">
        </div>
        </form>
  </div>
    </div>     

  </div>
        <!--foooter-->
        <?php include 'includes/footer.php'?>
  <script src="javascript/script.js"></script>
  <script src="javascript/view.js"></script>
</body>
</html>