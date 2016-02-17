
<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  // $message = $_POST['comment'];
 
  $rsvp = $_POST['rsvp'];
 
  $to = "alicia@aliciacohn.com";
  $subject = "RSVP";
  $emailcontent= "From: $name \n RSVP: $rsvp";
  $mailheader = "From: $name";
  mail($to, $subject, $emailcontent, $mailheader) 
  or header('Location: moonmari/index.php');
  header('Location: moonmari/info.php');
?>