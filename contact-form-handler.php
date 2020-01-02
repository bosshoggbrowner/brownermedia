<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'contactbrownermedia@gmail.com'
$email_subject = "Contact from Browner Media Website";
$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n"; 

$to = "contactbrownermedia@gmail.com";

 $headers = "From: $email_from \r\n";

$headers = .= "Reply-To: $visitor-email \r\n";

mail{$to,$email_subject,$email_body,$headers);

header("Location: contact.html");
 
 
?>
