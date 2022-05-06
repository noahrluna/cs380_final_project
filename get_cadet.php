<?php
include 'connect_db.php';
session_start();

if (isset($_GET["loginemail"]) && isset($_GET["password"])){

	$email_log = $_GET["loginemail"];
	$password_log = $_GET["password"];

	$query = "SELECT * FROM cadet WHERE email = ? AND BINARY password = ?";

	$statement = $db->prepare($query);
	$statement->bind_param('ss', $email_log, $password_log);
	$statement->execute();

	$data = array();

	$results = $statement->get_result();
	$row = $results->fetch_assoc();

	echo $row['email'];

	if (mysqli_num_rows($results) == 1) {
		$_SESSION["email"] = $email_log;
		$_SESSION["failLogin"] = false;
		header("location: index.php");
	} else {
		$_SESSION["failLogin"] = true;
		header("location: login.php");
	}
}
$db->close();
?>
