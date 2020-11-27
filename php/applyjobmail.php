
<?php
require 'phpMailer/PHPMailerAutoload.php';

$name = $_POST['username'];
$phno = $_POST['phone'];
$company = $_POST['company'];
$email = $_POST['email'];
$msg = $_POST['message'];

$message = "<b>Name :</b> ".$name."<br>";
$message .= "<b>Email :</b> ".$email."<br>";
$message .= "<b>Phone number :</b> ".$phno."<br>";
$message .= "<b>Company :</b> ".$company."<br>";
$message .= "<b>Message :</b> ".$msg."<br>";


$mail = new PHPMailer;
$mail->SetFrom('info@techniecode.com', 'Techniecode');
$mail->addAddress('challa.sivanagu98@gmail.com', 'TechniecodeTechniecode');
$mail->addAddress('info@techniecode.com', 'Techniecode');
   



$mail->Subject = 'Techniecode Careers Form Details';
$mail->isHTML(true);
$mail->Body = $message;

// if()
// {
  $info = pathinfo($_FILES['fileToUpload']['name']);
  $ext = $info['extension']; // get the extension of the file
  $newname = "Resume.".$ext; 

  $target = 'resumes/'.$newname;
  move_uploaded_file( $_FILES['fileToUpload']['tmp_name'], $target);
  $mail->addStringAttachment(file_get_contents($target), 'Resume.'.$ext);
 
// }

if(!$mail->send())
  { 
     $message = "Invalid Email ID, Please Provide An Correct Email ID.";
   }
  else
  {
    $message = "Your details are Submitted! We’ll Get Back To You Soon!";
  }
  echo $message;