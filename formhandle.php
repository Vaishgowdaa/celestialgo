<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'vaishnavir1.website3.me';
$email_subject = 'New Form Submission';
$email_body = "User name : $name.\n".
               "User email : $visitor_email.\n".
               "subject : $subject.\n". 
               "user message : $message.\n";


$to = 'Vaishnavirg02@gmail.com';
$headers ="From: $email_form \r\n";
$headers . ="Replat-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");



?>