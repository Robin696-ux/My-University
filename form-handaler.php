<?php
$name = $_POST['name'];
$visitor_email =  $_POST['email'];
$suject =  $_POST['subject'];
$message =  $_POST['message'];
$email_from = 'mdrobin.rrrr@gmaol.com';
$emai_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";
    
     $to = 'mdrobin.rrrr@gmail.com';
     $headers = "From: $email_from\r\n";
     $headers. = "Reply-To $visitor_email\r\n";
     mail($to,$emai_subject,$email_body,$headers)
     header('Location: contract.html')
     

?>