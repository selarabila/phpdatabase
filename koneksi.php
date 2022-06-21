<?php
try {
	// Database MYSQL dgn PDO_MYSQL
	$host = 'localhost';
	$dbname = 'dblat_pdo';
	$dbuser = 'user_malam';
	$dbpass = 'password';

	$dbh = new PDO("mysql:host = $host; dbname = $dbname", $dbuser, $dpass);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	echo '<h2>Koneksi Database Sukses!!</h2>';
} catch (PDOException $e){
	echo $e->getMessage();
}