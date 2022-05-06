<?php
	session_start();
?>
<html lang="en">

<head>
    <title> Cadet Postal System </title>
    <link rel="stylesheet" type="text/css" href="csl.css" />
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
</div>

<body>
    <br>
    <table>
        <tr>
            <th>Type</th>
            <th># Items</th>
        </tr>
        <tr>
            <td>Yellow Slips</td>
            <td><?php echo $_SESSION["slips"] ?></td>
        </tr>
        <tr>
            <td>Locker Keys</td>
            <td><?php echo $_SESSION["keys"] ?></td>
        </tr>
    </table>


</body>

</html>
