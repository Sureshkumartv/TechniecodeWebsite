<?php
 
                                
                $email = $_POST['email'];
                $name = $_POST['name'];


         $to = 'info@techniecode.com';
         $subject = "Techniecode - News Letter Subcription";
         $message = "<p>Name: ".$name."</p>\r\n";
         $message .= "<p>Email: ".$email."</p>\r\n";
         
         $header = "From:info@techniecode.com \r\n";
         // $header .= "Cc:catchmeatyourtime@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
           echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='thankyou.html';
    </SCRIPT>");
           
         }else {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Fail Please Check')  
    window.location.href='thankyou.html';
    </SCRIPT>");
         }   
?>