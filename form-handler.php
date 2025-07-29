<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'info@compost-utah.org';

$email_subject = 'New form submission';

$email_body = "Username: $name .\n".
                "User email: $visitor_email .\n".
                  "Subject: $subject .\n".
                    "User message: $message .\n";
$to = 'compostutah@gmail.com';
$headers = "From: $email_from \r\n";

$headers .= "Reply to: $visitor_email \r\n";

mail($to,$email_subject, $email_body, $headers);

header("Location: contactus.html");
echo "hello";



?>
