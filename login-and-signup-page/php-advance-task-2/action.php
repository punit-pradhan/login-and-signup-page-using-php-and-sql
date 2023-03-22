<?php
use PHPMailer\PHPMailer\PHPMailer;  //composer

require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';  //composer
require 'vendor/phpmailer/phpmailer/src/SMTP.php'; //composer
//created class Myclass
class Myclass{  
  private $mail;  //variable created in class 

  //constructor created 
  public function __construct(PHPMailer $mail){
      $this->mail = $mail;
  }

  //function myMethod created
  public function myMethod(){
    //$this->mailer = SMTP; Send using SMTP
    $this->mail->isSMTP();  
    //Set the SMTP server to send through
    $this->mail->Host = 'smtp.gmail.com';  
    //Enable SMTP authentication 
    $this->mail->SMTPAuth  = true;  
    //SMTP username
    $this->mail->Username = 'vikas.prasad@innoraft.com';
    //SMTP password
    $this->mail->Password = 'wszgnityedlohrtt'; 
    //Enable implicit TLS encryption
    $this->mail->SMTPSecure = 'tls'; 
    //port number
    $this->mail->Port =  587; 

    //email sent from this email id
    $this->mail->setFrom('vikas.prasad@innoraft.com');  
    //email send to
    $this->mail->addAddress($_POST['email']); 

    $this->mail->isHTML(true);
    //content of the mail
    $this->mail->Subject = 'your otp';  
    $this->mail->Body = '12345'; 
    //Function for sending
    $this->mail->send(); 
    echo "<script>alert('Send Successfully');
location.href='../forgotpassword.php';</script>";
  }
}

if(isset($_POST["submit"])){
    $mail = new PHPMailer(true);  
    //object created
    $myobj = new Myclass($mail); 
    //calling function
    $myobj->myMethod(); 
}
?>
