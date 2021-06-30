<?php

$servername = "localhost";

$username = "admin";

$password = "adminspassword";

$db = "contactform";



// Create connection

$mysqli = new mysqli($servername, $username, $password, $db);



// Check connection

if ($mysqli->connect_error) {

  die("Server Error");

}

?>
