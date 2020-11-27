<?php
require 'phpMailer/PHPMailerAutoload.php';

if($_POST){
    
 
$name = $_POST['username'];
$phone = $_POST['phone'];                
$email = $_POST['email'];
$company = $_POST['company'];
$website = $_POST['website'];
$message1 = $_POST['message'];

$message = "<p>Name: ".$name."</p>\r\n";
$message .= "<p>Phone Number: ".$phone."</p>\r\n";
$message .= "<p>Email: ".$email."</p>\r\n";
$message .= "<p>Company: ".$company."</p>\r\n";
$message .= "<p>Website: ".$website."</p>\r\n";
$message .= "<p>Message: ".$message1;


$mail = new PHPMailer;
$mail->SetFrom('info@techniecode.com', 'Techniecode');
$mail->addAddress('info@techniecode.com', 'Techniecode');
// $mail->addAddress('kumar.j@vtekh.com', 'Techniecode'); 
// **** dont' add any personal emails *****


$mail->Subject = 'Techniecode Contact Form Details';
$mail->isHTML(true);
$mail->Body = $message;

// // if()
// // {
//   $info = pathinfo($_FILES['fileToUpload']['name']);
//   $ext = $info['extension']; // get the extension of the file
//   $newname = "Resume.".$ext; 

//   $target = 'resumes/'.$newname;
//   move_uploaded_file( $_FILES['fileToUpload']['tmp_name'], $target);
//   $mail->addStringAttachment(file_get_contents($target), 'Resume.'.$ext);
 
// // }

if(!$mail->send())
  { 
     $message = "Invalid Email ID, Please Provide An Correct Email ID.";
   }
  else
  {
    $message = "Your details are Submitted! We’ll Get Back To You Soon!";
  }
  echo $message;
}