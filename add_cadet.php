<?php
include 'connect_db.php';

if (isset($_POST["lname"]) && isset($_POST["fname"]) && isset($_POST["createyear"]) && isset($_POST["squadron"])
		&& isset($_POST["pobox"]) && isset($_POST["createpassword"])) {
	$lname_create = $_POST["lname"];
	$fname_create = $_POST["fname"];
	$year_create = $_POST["createyear"];
	$squadron_create = $_POST["squadron"];
	$pobox_create = $_POST["pobox"];
	$password_create = $_POST["createpassword"];
	$email_create = "c".$year_create.strtolower($fname_create).".".strtolower($lname_create)."@afacademy.af.edu";

	$query = "INSERT INTO cadet (email, boxNumber, firstName, lastName, squadron, password) ".
		       "VALUES (?, ?, ?, ?, ?, ?)";

	$statement = $db->prepare($query);
	$statement->bind_param('sissis', $email_create, $pobox_create, $fname_create, $lname_create,
		             $squadron_create, $password_create);
	$statement->execute();

	header("location: login.php");
}
$db->close();
?>

