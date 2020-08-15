<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) ||
  empty($_POST['message']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
    echo "No arguments Provided!";
    return false;
  }

   // Create the email and send the message
   $name = strip_tags(htmlspecialchars($_POST['name']));
   $email_address = strip_tags(htmlspecialchars($_POST['email']));
   $phone = strip_tags(htmlspecialchars($_POST['phone']));
   $message = strip_tags(htmlspecialchars($_POST['message']));

   $sender = 'mihirfb@live.co.uk';
   $recipient = 'mihirt13@yahoo.com';

   $subject = "Website Contact Form:  ".$name."";
   $email_body =
   " You have received a new message from your website contact form. <br><br>
    Here are the details: <br><br>
    Name: ".$name." <br><br>
    Email: ".$email_address." <br><br>
    Phone: ".$phone." <br><br>
    Message: <br> ".$message."";

    $headers = "From: ".$sender."\r\n".
    "MIME-Version: 1.0" . "\r\n" .
    "Content-type: text/html; charset=UTF-8" . "\r\n";

    if(mail($recipient, $subject, $email_body, $headers)){
      return true;
    } else {
      return false;
    }

?>