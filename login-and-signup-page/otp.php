<?php
session_start();
$em= $_SESSION['email'];
include "connection.php";
if(isset($_POST['otp'])){
$pass=$_POST['your_pass'];
$repass=$_POST['re_pass'];
$otp=$_POST['otp'];
if($otp=="12345")
{
if ($repass == $pass) {

$sql="UPDATE details SET password='$pass' WHERE email='$em'";
if ($connect->query($sql) === TRUE) {
echo "<script>alert('Record updated successfully');
 location.href='index.php';</script>";
} else {
echo "Error updating record: " . $connect->connect_error();
}

$conn->close();

}
else{
    echo "<script>alert('password is not same');
    location.href='forgotpassword.php';</script>";
}
}

else
{
    echo "<script>alert('invalid otp');
    location.href='forgotpassword.php';</script>";
}
}
?>