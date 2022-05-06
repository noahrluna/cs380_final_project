<?php
    include 'connect_db.php';
session_start();
?>

<html lang="en">

<head>
  <title> Cadet Postal System </title>
  <link rel="stylesheet" href="csl.css">

</head>

<div class="background">
  <header>
    <h1> Cadet Postal System </h1>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <img src="post.png" width="200" height="100" alt="image here">
    <br> <br>
    <div class="dropdown">
      <button class="dropbtn">Menu</button>
      <div class="dropdown-content">
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
        <a href="faqs.php">FAQs</a>
        <a href="feedback.php">Feedback</a>
	<?php
  		if(isset($_SESSION['email'])){?>
			<a href="signout.php">Sign Out</a>
	  <?php ;}?>

      </div>
      
    </div>
  </header>

  
  <body class="showcase">
    <br>
    <h2>About the Cadet Postal System</h2>
    <p class="description">
      The Cadet Postal Service is designed to simplify the process between the mailroom and a cadet's time. This idea
      started as project for Databases and Applications,
      however after realizing how important the website could be to the cadet wing the project was made into a reality.
      Login or create your account to being accessing the services to check if you have any mail in your PO Box.
    </p> <br>
    <form action="get_mail.php" method="GET">
	<input class="submit" type="submit" value="Check Mail">
    </form>
  </body>
</div>

</html>
