<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
 
  $value = $_POST['rsvp'];
 
  $to = "alicia@aliciacohn.com";
  $subject = "RSVP";
  $emailcontent= "From: $name \n RSVP: $rsvp \n\n $value \n\n Comment: $comment";
  $mailheader = "RSVP From: $name";
  mail($to, $subject, $emailcontent, $mailheader);
  header('Location: info.php');



if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
     
   
   if (empty($_POST["RSVP"])) {
     $Err = "RSVP is required";
   } else {
     $RSVP = test_input($_POST["rsvp"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
