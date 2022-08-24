<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashbord</title>
   <link rel="stylesheet" href="css/dash.css">
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> 
</head>
<body>
  <nav>
    
    <div class="logo-name">
      <div class="logo-image">
        <img src="pics/logo 2.jpg" alt="logo">
      </div>
      <span class="logo_name">
        Royalhostel
      </span>
    </div>

    <div class="menu-items">
      <ul class="nav-links">
        <li><a href="#">
          <i class="uil uil-estate"></i>
          <span class="link-name">Dashbord</span>
        </a></li>
        
        <li><a href="dashboard.php">
          <i class="uil uil-edit-alt"></i>
          <span class="link-name">register-members</span>
        </a></li>
        <li><a href="view.php">
          <i class="uil uil-plus"></i>
          <span class="link-name">Add-rooms</span> 
        </a></li>
        <li><a href="#">
        <i class="uil uil-user"></i>
          <span class="link-name">Manage user</span>
        </a></li>
        <li><a href="#">
        <i class="uil uil-comment-alt-message"></i>
          <span class="link-name">user-contact-info</span>
        </a></li>
      </ul>

      <ul class="logout-mode">
        <li><a href="logout.php">
        <i class="uil uil-signout"></i>
          <span class="link-name">log-out</span>
        </a></li>

        <li class="mode">
          <a href="#">
          <i class="uil uil-moon"></i>
          <span class="link-name">mode</span>
        </a>

        <div class="mode-toggle">
          <span class="switch"></span>
        </div> 
      </li>
      </ul>
    </div>
  </nav>

  <section class="dashboard">
    <div class="top">
    <i class="uil uil-bars sidebar-toggle"></i>

      <div class="search-box">
       <i class="uil uil-search"></i>
        <input type="text" placeholder="search here...">
      </div>

      <img src="pics/pic27.jpg" alt="profilepic">
    </div>

    <div class="dash-content">
      <div class="overview">
        <div class="title">
        <i class="uil uil-tachometer-fast-alt"></i>
          <span class="text">dashboard</span> 
        </div>

        <div class="boxes">
          <div class="box box1">
            <i class="fa fa-home" style="font-size:30px;"></i> 
            <span>Total students</span>
            <span class="numbers">100</span>
          </div>

          <div class="box box2">
            <i class="fa fa-home" style="font-size:30px;"></i> 
            <span>Total rooms</span>
            <span class="numbers">100</span>
          </div>

          <div class="box box3">
            <i class="fa fa-home" style="font-size:30px;"></i> 
            <span>Total rooms left</span>
            <span class="numbers">100</span>
          </div>
        </div>
      </div>

      <div class="activity">
        <div class="title">
        <i class="uil uil-user"></i> 
          <span class="text">Registered members</span> 
        </div>
<!--collecting data ffrom the database to admin dashboard-->
        <div class="activity-data">
          <div class="data names">
            <span class="data-title">User names</span>
            <span class="data-list">john doa</span>
          </div>
          <div class="data emails">
            <span class="data-title">Emails</span>
            <span class="data-list">johndoe@gmail.com</span>   
          </div>
          <div class="data tell">
            <span class="data-title">Tell:</span>
            <span class="data-list">673 45 63 20</span>
          </div>
          <div class="data region">
            <span class="data-title">region</span>
            <span class="data-list">southwest</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <script src="javascript/dashboard.js"></script>
</body>
</html>