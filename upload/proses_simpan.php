<?php
	include 'koneksi.php';

	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$telp = $_POST['telp'];
	$alamat = $_POST['alamat'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	// set path folder simpan foto
	$path = "images/".$foto;

	//proses upload
	if (move_uploaded_file($tmp, $path)){ //cek gambar apakah berhasil diupload
		//proses simpan ke database
		$query = "INSERT INTO siswa VALUES('".$nis."', '".$nama."', '".$jenis_kelamin."', '".$telp."',
			'".$alamat."', '".$foto."')";

		$sql = mysqli_query($connect, $query);//jalankan perintah query

		if($sql){
			//sukses
			header("location: index.php"); //redirect ke halaman index.php
		}else{ //jika gagal
			echo "maaf,kesalahan dalam menyimpan ke database.";
			echo "<br><a href='form_simpan.php'>Kembali ke Form</a>";
		}
	}else{
		//jika gambar gagal diupload
		echo "maaf,gambar gagal diupload.";
		echo "<br><a href='form_simpan.php'>Kembali ke Form</a>";
	}

	
?>