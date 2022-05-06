<?php
$lname_create = $_POST["lname"];
$fname_create = $_POST["fname"];
$email_create = $_POST["createemail"];
$squadron_create = $_POST["squadron"];
$pobox_create = $_POST["pobox"];
$password_create = $_POST["createpassword"];

$query = "INSERT INTO cadet (email, boxNumber, firstName, lastName, squadron, password) ".
           "VALUES (?, ?, ?, ?, ?, ?);";

$statement = $db->prepare($query);
$statement->bind_param('sissis', $email_create, intval($pobox_create), $fname_create, $lname_create,
                 intval($squadron_create), $password_create);
$statement->execute();

?>

