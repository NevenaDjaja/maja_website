<?php
  if($_POST['submitted']==1) {
    $to = "nevena.dunjica@gmail.com";
    $subject = "email sa sajta";
   
    // data the visitor provided
    $name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
     
    //constructing the message
    $body = " From: $name_field\n\n E-Mail: $email_field\n\n Message:\n\n $message";
    mail($to, $subject, $body);
     
    // redirect to confirmation
    header('Location: thankyou.html');
  } else {
    header('Location: contact.html');
  }
?>