<?php
global $db;

//open database connection
$db = new mysqli("localhost", "student", "CompSci364", "cadet_postal_system");

if($db->connect_error){
    die("Connection failed: " . $db->connect_error);
  }

?>
