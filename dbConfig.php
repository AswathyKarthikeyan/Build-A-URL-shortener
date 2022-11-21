<?php

$host = 'localhost';
$database = 'urlshortner';
$user = 'root';
$password = '';
$dsn = "mysql:host=localhost;dbname=urlshortner;charset=UTF8";


try {
	$pdo = new PDO($dsn, $user, $password);

	if ($pdo) {
		//echo "Connected to the $database database successfully!";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}
?>