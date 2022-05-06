<?php

?>

<html lang="en">

<head>
    <title> Cadet Postal System </title>
    <link rel="stylesheet" type="text/css" href="csl.css" />
</head>

<header>
    <h1> Cadet Postal System </h1>

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

<body>
        <br>

<?php
    include 'get_cadet.php';
?>
        <form action="get_cadet.php" method="GET" onsubmit="return this.checkValidity()">
            <label for="loginemail">Email:</label>
            <input type="text" id="loginemail" name="loginemail" required
                placeholder="Email"><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required
                placeholder="Password"><br><br>

            <input class="submit" type="submit" value="Login"><br><br>
            <a class="submit" href="createAccount.php">Create Account</a>
        </form>

		<h2>
			<?php
				if (isset($_SESSION["failLogin"]) && $_SESSION["failLogin"] === true) {
					echo "Login failed. Check email and password!";
				}
			?>
		</h2>
</body>

</html>
