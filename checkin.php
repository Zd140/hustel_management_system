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
  <br><br><br><br>

  <section>
            <div class="form-container">
                <h1>Checkin</h1>
                <form action="">
                    <div class="control">
                        <label for="name">Username</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="control">
                        <label for="phone">Tel</label>
                        <input type="tel" name="tel" id="tel" placeholder="Phone number">
                    </div>

                    <div class="control">
                        <label for="number">Mumber of Stedents</label>
                        <input type="number" name="number" id="number" placeholder="Number of students">
                    </div>
                    <div class="control">
                      <label for="room">Type of room</label>
                      <select id="room" name="room">
                       <option value="">Choose room</option>
                        <option value="dorm">Dorm room</option>
                        <option value="single">Collage singles</option>
                        <option value="private">Private singles</option>
                        <option value="hostel">hostel single</option>
                      </select>
                    </div>
                    <div class="control">
                        <label for="date">checkin date</label>
                        <input type="date" name="date" id="date" placeholder="Number of students">
                    </div>
                    <div class="control">
                        <label for="date">checkout date</label>
                        <input type="date" name="date" id="date" placeholder="Number of students">
                    </div>
                    <div class="control">
                        <input type="submit" value="Checkin">
                    </div>
                </form>
                
            </div>
        </section>
        <br><br><br><br><br><br><br>
        <!--foooter-->
        <?php include 'includes/footer.php'?>
  <script src="javascript/script.js"></script>
  <script src="javascript/view.js"></script>
</body>
</html>