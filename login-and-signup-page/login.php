<?php
session_start();
if (isset($_POST["email"]) && isset($_POST['your_pass'])) {
    $email = $_POST['email'];
    $_SESSION['email'] = $email;
    $pass = $_POST['your_pass'];
    $_SESSION['your_pass'] = $pass;
    include "connection.php";

/* Create database  connect with correct username and password*/
$connect=new mysqli($servername,$username,$password,$database);
/* Check the connect is created properly or not */
if(!$connect)
    echo "connect error:" .$connect->connect_error;
else
    // echo "connect is created successfully"; 
$res="SELECT `id`  from `details` WHERE email='$email' and password = '$pass'";

$result = $connect->query($res);
if ($result->num_rows > 0) {
    echo "<script>alert('welcome');</script>";
    echo "welcome";

   }  
      else {
        echo "<script>alert('invalid user or password');
        location.href='index.php';</script>";
   }
  $conn->close();
}
?>