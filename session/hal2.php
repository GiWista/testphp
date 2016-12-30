<?php
session_start();

if(!isset($_SESSION['nama'])){
	//jika session belum di set/register

	die('anda belom terdafar');
}
//jika sudah terdaftar


?>

<h2>Selamat Datang</h2>
<?php
echo $_SESSION['nama'];

echo '<a href="logout.php">Logout</a>';
?>

