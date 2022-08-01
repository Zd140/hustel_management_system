<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkin</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.1.2-web/css/all.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.1.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.1.2-web/css/brands.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.1.2-web/css/brands.min.css">
    <link rel="stylesheet" href="css/w3.css">
</head>
<body>
    <!--header-->
    <header class="header">
        <div class="container">
          <div class="row align-item-center justify-content-between">
            <div class="logo">
             <h1>Royal<span>hustel</span></h1>
            </div>
            <button type="button" class="nav-toggler">
              <span></span>
            </button>
            <nav class="nav">
              <ul>
                <li><a href="index.html" class="active">home</a></li>
                <li><a href="sigin.html" class="active">register</a></li>
                <li><a href="login.html" class="active">login</a></li>
                <li><a href="about.html" class="active">about</a></li>
                <li><a href="#" class="active">profile</a></li>
    
              </ul>
            </nav>
          </div>
        </div>
      </header>

      <!--form-->
      <div class="cont">

        <div class="w3-container">
          <form action="">
          <h2 class="head w3-center">Checkin</h2> 
            <label for="username">User name:</label><br>
            <input type="username" id="username" name="username" placeholder="username" required><br>
            <label for="number">Number</label><br>
            <input type="number" id="number" name="number" placeholder="number" required><br>
            <label for="status">Status:</label><br>
            <select id="status" name="cars">
              <option></option>
              <option value="student">Student</option>
              <option value="married">marreid</option>
              <option value="single">Single</option>
              <option value="singleparent">single Parent</option>
            </select> <br>
             <label for="quantity">Number of childern(1-10)</label><br>
              <input type="number" id="quantity" name="quantity" min="1" max="10"><br>
              <label for="checkin">Check in date</label><br>
              <input type="date" id="" name=""><br>
              <label for="chechout">check out date:</label><br>
              <input type="date" id="" name=""><br><br>
              <input type="submit" value="Payment">
          </form>
        </div>
      
      
        <!--footer-->
        <footer>
          <div class="w3-container w3-white">
            <div class="w3-third icon">
              <span ><i class="fa-brands fa-whatsapp w3-text-green"></i></span>
              <span style="padding-left: 15px;"><i class="fa-brands fa-twitter w3-text-blue"></i></span>
              <span style="padding-left: 15px;"><i class="fa-brands fa-facebook w3-text-blue"></i></span>
            </div>
            <div class="w3-third w3-center" style="padding-top: 15px;">
              <span>Office:</span><br>
              <span><i class="fa-solid fa-phone"></i></span>
              <span>654-453-222</span>
            </div>
            <div class="w3-third"><a href="#" class="w3-left">privacy</a></div>
          </div>
        </footer>

      </div>
      <!--javascript-->
      <script src="javascript/script.js"></script>
</body>
</body>
</html>
</body>
</html>