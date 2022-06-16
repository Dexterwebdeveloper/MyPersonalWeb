<?php
$name = $_POST['name'];
$visotor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'galondexter95@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name\n".
                "User Email: $visotor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message .\n"


  $to = 'galondexter95@gmail.com';
  
  $headers = "From: $email_from \r\n";

  $headers = "reply-to: $visitor_email \r\n";

  mail($to,$email_subject,email_body,$headers);

  header("Location: index.html");
?>
