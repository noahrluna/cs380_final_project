<?php
include 'connect_db.php';
session_start();

if (!isset($_SESSION["email"])) {
	header("location: login.php");
} else {
	$email = $_SESSION["email"];
	
	$query = "SELECT COUNT(y.binaryBarcode) as yc
				FROM yellowSlip y INNER JOIN (mailParcel m INNER JOIN cadet c on m.boxNumber=c.boxNumber) ON y.binaryBarcode=m.binaryBarcode
				WHERE email = ?;";

	$statement = $db->prepare($query);
	$statement->bind_param('s', $email);
	$statement->execute();

	$data = array();

	$results = $statement->get_result();
	$row = $results->fetch_assoc();

	$query2 = "SELECT COUNT(l.binaryBarcode) as lc
				FROM lockerKey l INNER JOIN (mailParcel m INNER JOIN cadet c on m.boxNumber=c.boxNumber) ON l.binaryBarcode=m.binaryBarcode
				WHERE email = ?;";

	$statement2 = $db->prepare($query2);
	$statement2->bind_param('s', $email);
	$statement2->execute();

	$data2 = array();

	$results2 = $statement2->get_result();
	$row2 = $results2->fetch_assoc();
	
	if (mysqli_num_rows($results) == 1 && mysqli_num_rows($results2) == 1) {
		$_SESSION["slips"] = $row['yc'];
		$_SESSION["keys"] = $row2['lc'];
		header("location: checkMail.php");
	} else {
		echo "Error: could not check for slips and keys.";
	}
}
$db->close();
?>
