<?php
include("connection.php");
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $price = $_POST['price'];
  $transmission = $_POST['transmission'];
  $fuelType = $_POST['fuelType'];
  $speed = $_POST['speed'];
  $model = $_POST['model'];



  $sql = "INSERT into car_reg(name, price , transmission, fueltype, speed, model)  values('$name', '$price', ' $transmission', '$fuelType', '$speed', '$model')";
  $result = mysqli_query($db, $sql);

  echo "<script>console($name,$price)</script>";


  if ($db->query($sql) === TRUE) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . $db->error;
  }
}

if (isset($_POST["SUBMIT"])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $message = $_POST['textarea'];

  $sql = "INSERT into contacts values('$name', '$email', ' $number', '$message');";
  $result = mysqli_query($db, $sql);

  echo "<script>console($name,$email)</script>";


  if ($db->query($sql) === TRUE) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . $db->error;
  }
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Car Rental Management System</title>
  <link rel="stylesheet" href="project.css" />
  <link rel="stylesheet" href="project.jss">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
</head>



<body>
  <header class="header" id="header">
    <a href="#" class="logo"><span>Snake</span>Gears</a>
    <nav class="navbar">
      <a href="#">Home</a>
      <a href="#">Vehicles</a>
      <a href="#">Services</a>
      <a href="#">Featured</a>
      <a href="#">Review</a>
      <a href="#">Contacts</a>
    </nav>

    <div id="login-btn">
      <a href="logout.php"><button class="btn" id="loginbtn"><?php echo $_SESSION['username']; ?></button></a>
    </div>
  </header>

  <section class="home" id="home">
    <h1 class="home-parallax">Find your car</h1>
    <img class="home-parallax" src="images/home-img.png" alt="home-img" />
    <a href="#" class="btn home-parallax">Explore Cars</a>
  </section>

  <section class="icon-container" id="icon-container">

    <div class="icons">
      <div class="content">
        <h3>150+</h3>
        <p>branches</p>
      </div>
    </div>
    <div class="icons">
      <div class="content">
        <h3>1672+</h3>
        <p>Cars Sold</p>
      </div>
    </div>
    <div class="icons">
      <div class="content">
        <h3>877+</h3>
        <p>Clients</p>
      </div>
    </div>
    <div class="icons">
      <div class="content">
        <h3>100+</h3>
        <p>New Cars</p>
      </div>
    </div>
  </section>

  <section class="vehicles" id="vehicles">
    <h1 class="heading">Popular Vehicles</h1>


    <div class="vehicles-slider">
      <div class="box">
        <img src="images/car-3.png" alt="vehicle-1" />
        <div class="content">
          <h3>new model</h3>
          <div class="prize"><span>price: </span> $55000</div>
          <p>
            New
            <span class="fas fa-circle"></span> Automatic
            <span class="fas fa-circle"></span> Petrol
            <span class="fas fa-circle"></span> 234mph
          </p>
          <a href="#" class="btn"> Check Out</a>
        </div>
      </div>

      <div class="box">
        <img src="images/vehicle-2.png" alt="vehicle-2" />
        <div class="content">
          <h3>new model</h3>
          <div class="prize"><span>price: </span> $90000</div>
          <p>
            New
            <span class="fas fa-circle"></span> Automatic
            <span class="fas fa-circle"></span> Gas
            <span class="fas fa-circle"></span> 123mph
          </p>
          <a href="#" class="btn"> Check Out</a>
        </div>
      </div>

      <div class="box">
        <img src="images/vehicle-4.png" alt="vehicle-3" />
        <div class="content">
          <h3>new model</h3>
          <div class="prize"><span>price: </span> $40000</div>
          <p>
            New
            <span class="fas fa-circle"></span> Manual
            <span class="fas fa-circle"></span> Gas
            <span class="fas fa-circle"></span> 122mph
          </p>
          <a href="#" class="btn"> Check Out</a>
        </div>
      </div>

      <div class="box">
        <img src="images/car-4.png" alt="vehicle-4" />
        <div class="content">
          <h3>new model</h3>
          <div class="prize"><span>price: </span> $65000</div>
          <p>
            New
            <span class="fas fa-circle"></span> Automatic
            <span class="fas fa-circle"></span> Petrol
            <span class="fas fa-circle"></span> 231mph
          </p>
          <a href="#" class="btn"> Check Out</a>
        </div>
      </div>

      <div class="box">
        <img src="images/car-6.png" alt="vehicle-4" />
        <div class="content">
          <h3>new model</h3>
          <div class="prize"><span>price: </span> $87000</div>
          <p>
            New
            <span class="fas fa-circle"></span> Manual
            <span class="fas fa-circle"></span> Gas
            <span class="fas fa-circle"></span> 121mph
          </p>
          <a href="#" class="btn"> Check Out</a>
        </div>
      </div>

      <div class="box">
        <img src="images/vehicle-5.png" alt="vehicle-4" />
        <div class="content">
          <h3>new model</h3>
          <div class="prize"><span>price: </span> $32000</div>
          <p>
            New
            <span class="fas fa-circle"></span> Automatic
            <span class="fas fa-circle"></span> Petrol
            <span class="fas fa-circle"></span> 255mph
          </p>
          <a href="#" class="btn"> Check Out</a>
        </div>
      </div>

      <!-- <div class="box">
        <div class="content">
          <a href="#" class="btn" id="new_file" onclick="Open_reg()"> New File</a>
        </div>
      </div> -->
    </div>
  </section>

  <section class="car_reg">
    <form method="POST" action="">
      <h3>Car Details</h3>
      <input type="text" placeholder="Name" name="name" id="" class="box" />
      <input type="text" placeholder="Price" name="price" id="" class="box" />
      <input type="text" placeholder="Automatic/Manual" name="transmission" id="" class="box" />
      <input type="text" placeholder="Gas/Petrol" name="fuelType" id="" class="box" />
      <input type="text" placeholder="Speed in mph" name="speed" id="" class="box" />
      <input type="text" placeholder="Model New/Old" name="model" id="" class="box" />
      <input type="submit" name="submit" value="Submit" class="btn" id="submit_btn" />
    </form>
  </section>



  <section class="services" id="services">
    <h1 class="heading">Our Services</h1>
    <div class="box-container">
      <div class="box">
        <h3>Car Selling</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, quod?
        </p>
        <a href="#" class="btn">Read More</a>
      </div>

      <div class="box">
        <h3>Car Insurance</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, quod?
        </p>
        <a href="#" class="btn">Read More</a>
      </div>

      <div class="box">
        <h3>Parts Repair</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, quod?
        </p>
        <a href="#" class="btn">Read More</a>
      </div>

      <div class="box">
        <h3>Battery Replacement</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, quod?
        </p>
        <a href="#" class="btn">Read More</a>
      </div>

      <div class="box">
        <h3>Oil Change</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, quod?
        </p>
        <a href="#" class="btn">Read More</a>
      </div>

      <div class="box">
        <h3>24/7 Support</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, quod?
        </p>
        <a href="#" class="btn">Read More</a>
      </div>
    </div>
  </section>

  <section class="newsletter" id="newsletter">
    <h3>Subscribe for lastest Updates</h3>

    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum
      cupiditate eveniet illo quia totam inventore!
    </p>

    <form action=”mailto:contact@yourdomain.com” method=”POST” enctype=”multipart/form-data” name=”EmailForm”>
      <input type="email" placeholder="enter your email" />
      <input type="submit" value="submit" class="subscribe" />
  </section>

  <section class="contact" id="contact">
    <h1 class="heading">Contact us</h1>
    <div class="row">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13235.517184197677!2d71.44179855!3d33.9699418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1653247505166!5m2!1sen!2s" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" alt="google-maps"></iframe>

      <form action="">
        <h3>Get in touch</h3>
        <input type="text" placeholder="name" class="box" name="name" />
        <input type="email" placeholder="email" class="box" name="email" />
        <input type="number" placeholder="number" class="box" name="number" />
        <textarea name="textarea" id="" cols="74" rows="2" placeholder="message" name="textarea"></textarea>
        <input type="SUBMIT" value="send message" class="btn" />
      </form>
    </div>
    <footer class="footer" id="footer">
      <p>
        copyright &copy; 2022 By <span>Usman Manzoor</span> and
        <span>Haseeb Jan </span>
      </p>
    </footer>
  </section>


  <script src="project.js"></script>
</body>

</html>