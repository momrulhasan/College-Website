<?php
$name = $POST[''];
$visitor_email = $_POST[''];
$message = $_POST[''];
$subject = $_POST[''];


$email_from = 'info@yourwebsite.com';
$email_subject = 'New From Submission';
$email_body = "user Name: $name.\n",
              "user Email: $visitor_email.\n",
              "subject: $subject.\n";
              "User Message: $message ./n";

$to = 'mdssix@gmail.com'

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $ visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");



?>