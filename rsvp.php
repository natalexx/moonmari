

<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
 
  $value = $_POST['rsvp'];
 
  $to = "alicia@aliciacohn.com";
  $subject = "RSVP";
  $emailcontent= "From: $name \n RSVP: $rsvp \n\n $value";
  $mailheader = "From: $name";
  mail($to, $subject, $emailcontent, $mailheader) or header('Location: error.html');

  if ($value == $yes)
   header("Location: thank-you.html);
elseif
   header("Location: no.html");

?>

<div id="response" class="form">
      
 <form action="rsvp.php" method="POST">    
     <p>Name (First & last)</p>
    <input type="text" name="name" style="background-color:#bdcbd9" />
    <p>Email</p>
    <input type="text" name="email" style="background-color:#bdcbd9" />
     <br><br>
    <input type="radio" name="rsvp" value="Yes I can attend :) <?php echo $yes; ?>">RSVP: Yes<br />
    <input type="radio" name="rsvp" value="No I cannot attend :( <?php echo $no ;?>">RSVP: No<br />
                   <div id="submit">  
    <input type="submit" value="RSVP" action="rsvp.php" method="POST" />
                       </form></div>
                       <div id="skip">  <p><a href="thank-you.html">I already sent my RSVP.</a></p>
                           
</div>