<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
 
  $value = $_POST['rsvp'];
 
  $to = "alicia@aliciacohn.com";
  $subject = "RSVP";
  $emailcontent= "From: $name \n RSVP: $rsvp \n\n $value";
  $mailheader = "From: $name";
  mail($to, $subject, $emailcontent, $mailheader) or header('Location: emailerror.html');
  header('Location: thank-you.html');
?>