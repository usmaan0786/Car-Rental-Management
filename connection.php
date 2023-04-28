  <?php
  $db = new mysqli("localhost", "root", "", "car_rental_management");

  //Check connection
  if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    exit();
  } else {
    //  echo "Connection Established to MySQL: " . $db -> connect_error;
  }
  ?>
