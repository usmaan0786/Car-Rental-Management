<?php
include 'connection.php';


session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: project.php");
}
if (isset($_POST['submit'])) {
    $email = $_POST['username'];
    $password = $_POST['password'];



    $sql = "SELECT * FROM accounts WHERE username='$email' AND password='$password'";
    $result = mysqli_query($db, $sql);

    if ($result->num_rows > 0) {  
        $row = mysqli_fetch_assoc($result);
        //$_SESSION['username'] = $row['username'];
        $_SESSION['username'] = $row['username'];
        //$pidv=$row['pid'];



        header("Location: project.php");
    } else {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="project.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <title>Login</title>
</head>

<body>
    <div class="login-form-container" id="login-form-container">
        <form method="POST" action="">
            <h3>User Login</h3>
            <input type="email" placeholder="Enter email" name="username" id="" class="box" />
            <input type="password" placeholder="Enter password" name="password" id="" class="box" />
            <p>Forget your password <a href="Click Here"> Click Here</a></p>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p>Already have an Account</p>
            <div>
                <a href="#" class="btn"> Google</a>
                <a href="#" class="btn"> Facebook</a>
            </div>
            <p>Don't have an Account <a href="#">create one</a></p>
        </form>
    </div>
    <!-- <?php
            // if (isset($_POST["login"])) {

            //     $username = $_GET['username'];
            //     $password = $_GET['password'];

            //     $query = $conn->prepare("select username , password from accounts where username = '" . $username . "' and password = '" . $password . "' ; ");
            //     $result = $query->execute();
            //     $result = $query->fetchAll(PDO::FETCH_ASSOC);

            //     if ($result == NULL) {
            //         echo "Password/username is Incorrect";
            //     } else {
            //         echo "Password is Incorrect";
            //     }
            // }

            ?> -->

</body>

</html>