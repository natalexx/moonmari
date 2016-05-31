
<?php include 'header.php'; ?>
<title>Will + Ruth | RSVP</title>

                   <div id="response" class="form">
      <h2>Oops! Try again!</h2>
 <form action="rsvp.php" method="POST">    
     <p>Name (First & last)</p>
    <input type="text" name="name" style="background-color:white" />
    <p>Email</p>
    <input type="text" name="email" style="background-color:white" />
     <br><br>
    <input type="radio" name="rsvp" value="Yes :)">RSVP: Yes<br />
    <input type="radio" name="rsvp" value="No :(">RSVP: No<br />
    <p>Comments:</p>
   <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>

                   <div id="submit">  

    <input type="submit" value="RSVP" action="rsvp.php" method="POST" />
                       </form></div>
    
                       <div id="skip">  <p><a href="info.php">I already sent my RSVP.</a></p>
        
</div><!-- end main wrapper -->
</div>
</body> 
<!-- Site footer -->
<?php include 'footer.php'; ?>
