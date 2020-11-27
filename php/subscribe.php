<?php
require 'phpMailer/PHPMailerAutoload.php';
if(isset($_POST) && $_POST['email']!="" && $_POST['name']!=""){
    
 
$email = $_POST['email'];
$name = $_POST['name'];

$message = "<p>Name: ".$name."</p>\r\n";
$message .= "<p>Email: ".$email."</p>\r\n";


$mail = new PHPMailer;
$mail->SetFrom('info@techniecode.com', 'Techniecode');
$mail->addAddress('info@techniecode.com', 'Techniecode');
//$mail->addAddress('kumar.j@vtekh.com', 'Techniecode');   

// **** dont' add any personal emails *****

$mail->Subject = 'Techniecode Newsletter Subscription';
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
     $message = "Invalid Email ID, Please Provide An Correct Email ID";
   }
  else
  {
    $message = "Your details are Submitted! We’ll Get Back To You Soon!";
  }
  echo $message;
  
}