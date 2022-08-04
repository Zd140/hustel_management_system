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
  <div class="container">
  <h2 class="w3-center">Checkin</h2>
  <form action="/action_page.php">


  <div class="row">
    <div class="col-25">
      <label for="username">User name</label>
    </div>
    <div class="col-75">
      <input type="text" id="username" name="username" placeholder="username" required>
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
    </div>
  </div>


        <div class="row">
          <div class="col-25">
            <label for="number">Phone number</label>
          </div>
          <div class="col-75">
            <input type="tel" id="number" name="tel" placeholder="+237 655 40 56 73" required>
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
            <label for="country">Cagories fo rooms</label>
          </div>
          <div class="col-75">
            <select id="country" name="country">
            <option></option>
              <option value="collage">Collage single</option>
              <option value="hostel">Hostel single</option>
              <option value="dorm">Dorm rooms</option>
              <option value="private">Private singles</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
          <label for="quantity">Number of children</label>
          </div>
          <div class="col-75">
          <input type="number" id="quantity" name="quantity" min="1" max="10">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
          <label for="date">Checkin date</label>
          </div>
          <div class="col-75">
          <input type="date" id="check" name="">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
          <label for="date">Checkout date</label>
          </div>
          <div class="col-75">
          <input type="date" id="check" name="">
          </div>
        </div>

  <br>
  <div class="row">
    <input type="submit" value="make payment">
  </div>
  
</div>
      
        <!--footer-->
        <?php include 'includes/footer.php'?>
  <script src="javascript/script.js"></script>
  <script src="javascript/view.js"></script>
</body>
</html>