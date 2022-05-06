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
    <h1>Enter the information below to create an account</h1>
        <br>
		<?php
    		include 'add_cadet.php';
		?>
        <form action="add_cadet.php" method="POST" onsubmit="return this.checkValidity()">
	    	<label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" pattern="[a-zA-Z]{1,50}" required
                placeholder="First name"><br><br>

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" pattern="[a-zA-Z -]{1,50}" required
                placeholder="Last name"><br><br>

            <label for="pobox">PO Box #:</label>
            <input type="text" id="pobox" name="pobox" pattern="[0-9]{4}" required
                placeholder="PO Box #"><br><br>

            <label for="squadron">Squadron:</label>
            <input type="text" id="squadron" name="squadron" pattern="[0-9]{1,2}" required
                placeholder="Squadron"><br><br>

            <label for="createyear">Class Year (ie. 23):</label>
            <input type="text" id="createyear" name="createyear" pattern="[0-9]{2}" required
                placeholder="XX"><br><br>

            <label for="createpassword">Password:</label>
            <input type="password" id="createpassword" name="createpassword" pattern="[a-zA-Z0-9.-!@#$%^&*()_]{8,50}" 		    
				required placeholder="Password"><br><br>

            <label for="createpasswordC">Confirm password:</label>
            <input type="password" id="createpasswordC" name="createpasswordC" pattern="[a-zA-Z0-9.-!@#$%^&*()_]{8,50}" 		    
				required placeholder="Confirm password"><br><br>

        	<input class="submit" type="submit" value="Create"><br><br>
    </form>
</body>

</html>
