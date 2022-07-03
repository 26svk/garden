<?php
$name = $_POST['name'];
$visiotr_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'sakshammathcountsaisb@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "User name: $name.\n'".
                "User name: $visitor_email.\n'".
                "Subject: $subject.\n".
                "User Message: $message .\n";
$to = 'sakshammathcountsaisb@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email /r/n";

mail($to,$subject,$email_body,$headers)

header("Location: contact.html")





?>