<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=devicewidth, initial-scale=1, maximum-scale=1">
<meta name="description" content="wedding engagement">
<link href='https://fonts.googleapis.com/css?family=Raleway:400,600|Gentium+Book+Basic:400,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Seaweed+Script' rel='stylesheet' type='text/css'>
       <link rel="shortcut icon" href="favicon.ico" />

<title>Will + Ruth</title>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css">
<link href="style.css" rel="stylesheet" type="text/css" />
    
   
<!-- Header navigation -->
<header id="pic1">
<div id="top-nav">
<div id="main">  
                   <div class="name">Ruth + Will</div> 

        <ul>
            <a href="response.php"><li class="btn response center"><a href="response.php">RSVP</a></li></a>
           <a href="response.php"><li class="btn response center"><a href="info.php">Info</a></li></a>
                      </ul>
</div>
</div>
</header>

<!-- main content -->
<body>
    <div class="main">
<div id="title"><h2>June 16, 2016<br>
 Seattle, Washington </h2>

<?php
$date = strtotime("June 16, 2016 7:00 PM");
$remaining = $date - time();
$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);


    echo '<h2>Only ' . $days_remaining . ' days to go!</h2>'; 
    ?>

   </div>

    <div class="one_half announcement left">
        <div class="center">Moon to Marry Mari</div>
VAIL - Ms. Ruth Clarisse Moon, ace reporter and journalism studies researcher, on Sept. 25, 2015 accepted the marriage proposal of media historian Mr. William Thomas Mari. Ms. Moon and Mr. Mari were on Vail Mountain at approximately 9500 feet above sea level when Mr. Mari knelt and asked Ms. Moon to "please stand up for this part." Ms. Moon, shocked but not too shocked, interrogated Mr. Mari briefly amid the flaming aspens before accepting his proposal. Mr. Mari has been courting Ms. Moon for two years and three months. Ms. Moon is regarded by some as the most eligible PhD student in all of academia. Mr. Mari, himself a looker, told this reporter he is "in awe of his new fiance." The wedding is tentatively scheduled for the future. All may attend, though only the first 100 through the door can eat.  </div>
        <div class="one_half right"> <img src="moonmari.jpg"/> </div>
</div>
</body>

<!-- end main wrapper -->
<!-- Site footer -->
<?php include 'footer.php'; ?>