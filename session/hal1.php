<?php
session_start();

$_SESSION['nama'] = 'gilang';

echo $_SESSION['nama'];

echo '<a href="hal2.php">Kehalaman 2 </a>';

?>