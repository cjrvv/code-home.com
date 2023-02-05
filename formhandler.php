<?php
$name = $_POST['NAME'];
$visitor_email = $_POST['EMAIL'];
$message = $_POST['MESSAGE'];

$email_from = 'info@mywebsite.com';

$email_subject = 'New form Submission';

$email_body = "User Name: $name. \n".
			  "User Email: $visitor_email. \n".
			  "User Message: $message. \n";

$to = 'catcherrodriguez@gmail.com';

$headers = "From: $email_from \r \n";

$headers = "Reply-To: $visitor_email \r\n"

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");
?>