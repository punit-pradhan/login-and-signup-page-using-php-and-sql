<?php
session_start();
if (isset($_POST["email"]) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $_SESSION['email'] = $email;
    $repass = $_POST['re_pass'];
    $pass = $_POST['password'];
    include "connection.php";

    /* Create database  connect with correct username and password*/
    $connect = new mysqli($servername, $username, $password, $database);
    /* Check the connect is created properly or not */
    if (!$connect)
        echo "connect error:" . $connect->connect_error;
    else
        // echo "connect is created successfully"; 
        $res = "SELECT `id`  from `details` WHERE email='$email'";

    $result = $connect->query($res);
    if ($result->num_rows > 0) {
        echo "<script>alert('email already exist');
    location.href='index.php';</script>";
    } 
    else {

        if ($repass == $pass) {
            $ins = $connect->prepare("INSERT into details(email,password) VALUES ('$email','$pass')");
            $ins->execute();
            $connect->close();
            echo "<script>alert('thank you for registering');
            location.href='index.php';</script>";
        } else {
            echo "<script>alert('password is not same');
            location.href='signup.php';</script>";
        }
    }

    $conn->close();
}
?>