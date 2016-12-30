<?php
	include 'kasus2-class.php';

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$mydb = 'oop';

	$db = new database($host, $user, $pass, $mydb);

	$db->connectMysql();


?>