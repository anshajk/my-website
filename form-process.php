<?php
  $emailTo = "anshaj.khare2@gmail.com";
  $subject = "You have a new message from anshaj.info";
  $name = trim(stripslashes($_POST['name']));
  $email = trim(stripslashes($_POST['email']));
  $message = trim(stripslashes($_POST['message']));

  // prepare email body text
  $body = "";
  $body .= "Name: ";
  $body .= $name;
  $body .= "\n";
  $body .= "E-mail: ";
  $body .= $email;
  $body .= "\n";
  $body .= "Message: ";
  $body .= $message;
  $body .= "\n";
  $mail = mail($emailTo, $subject, $body);

  if (mail){
    header("Location: http://saurabhsharma.info/contact.html");
    die();
  }

?>
