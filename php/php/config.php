<?php
session_start();

// Define database
define('dbhost', 'localhost');
define('dbuser', 'prevozljrs_contact');
define('dbpass', 'qUjTW265MKzPvd7');
define('dbname', 'prevozljrs_pettaxi');

// Connecting database
try {
	$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo $e->getMessage();
}

?>
