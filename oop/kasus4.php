<?php
	include 'kasus2-class.php';

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$mydb = 'test';


	$db = new database($host, $user, $pass, $mydb);

	$db->connectMySQL();

	$db->tampilBuku();
?>