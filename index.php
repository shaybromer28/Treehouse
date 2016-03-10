<?php
define("YEAR", 2014);
define("JOB_TITLE", "Teacher");
define("MAX_BADGES", 1500000);

//invalid constant name
define("2LEGIT", "to quit");

// This is my first name
$name = "Shay";
$location = "Orlando, FL";
$full_name = "Mike the Frog";
$name = $full_name;
$social_icons = array('twitter', 'instagram', 'google');
?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title><?php echo $name ?>| Treehouse Profile</title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>
  
  <body>
    <section class="sidebar text-center">
      <div class="avatar">
        <img src="img/avatar.png" alt="<?php echo $name ?>">
      </div>
      <h1><?php echo $name ?></h1>
      <p><?php echo $location ?></p>
      <hr />
      <p>Welcome to PHP Basics!</p>
      <hr />
      <ul class="social">
        <?php
            foreach($social_icons as $icon){
        ?>
        <li><a href=""><span class="icon <?php echo $icon ?>"></span></a></li>
        <?php
          }
        ?>
      </ul>
    </section>
    <section class="main">
      <ul>
        <?php
        for ($counter=0; $counter < 10; $counter++) {
            echo "<li>" . $counter . "</li>";
        }
      ?>
      </ul>
      <!--<p>Let's Get Started!</p>
      <p><?php echo "Hello World!" ?></p>-->
    </section>
  </body>
</html>