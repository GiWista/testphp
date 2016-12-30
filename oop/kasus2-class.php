<?php
	
	class database
	{
		private $dbHost;
		private $dbUser;
		private $dbPass;
		private $dbName;

		function __construct($a, $b, $c, $d)
		{
			$this->dbHost = $a;
			$this->dbUser = $b;
			$this->dbPass = $c;
			$this->dbName = $d;
		}

		function connectMySQL()
		{
			mysql_connect($this->dbHost, $this->dbUser, $this->dbPass);
			mysql_select_db($this->dbName);
		}

		function addBuku($judul, $pengarang, $penerbit, $thnTerbit)
		{
			$query = "INSERT INTO buku (judul, pengarang, penerbit, tahunTerbit)
						VALUES ('$judul', '$pengarang', '$penerbit', '$thnTerbit')";
			$hasil = mysql_query($query);
				if ($hasil)
					{
					 echo "Data buku sudah disimpan ke DB";
					}else{ 
						echo " Data buku gagal disimpan di DB";

					}
		}

		function tampilBuku()
		{
			echo "<table border='1'>";
			echo "<tr><th>No</th><th>Judul Buku</th>
			 		<th>Pengarang</th><th>Penerbit</th><th>Tahun Terbit</th><th>Action</th></tr>";

			 		//query untuk menampilkan semua data buku
			 		$query = "SELECT * FROM buku ORDER BY id";
			 		$hasil = mysql_query($query);
			 		$i = 1;
			 		while ($data = mysql_fetch_array($hasil))
			 		{
			 			echo 
			 			"<tr><td>".$i."</td><td>".$data['judul']."</td></td>".$data['pengarang']."</td>
			 			<td>".$data['penerbit']."</td><td>".$data['tahunTerbit']."</td><td><a
			 			href='".$_SERVER['PHP_SELF']."?op=edit&id=".$data['id']."'>Edit</a> | <a 
			 			href='".$_SERVER['PHP_SELF']."?op=de&id=".$data['id']."'>Hapus</a></td></tr>";

			 			$i++;
			 		}
			 		echo "</table>";
		}
	}


?>	