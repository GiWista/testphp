<?php 
	include 'class-kendaraan.php';

	$pesawat1 = new pesawat("Boeing 737", 2000000000);
	$pesawat1->setTinggiMaks(8000);
	$pesawat1->setKecepatanMaks(900);
	echo 'Biaya operasional pesawat '.$pesawat1->bacaMerek().
	'dengan harga Rp.'.$pesawat1->bacaHarga().
	' yang memiliki tinggi maksimum '.$pesawat1->bacaTinggiMaks().' feet ',
	'dan kecepatan maksimum '.$pesawat1->bacaKecepatanMaks().' km/jam adalah Rp.',
	''.$pesawat1->biayaOperasional();
	echo "<br>";

	$pesawat2 = new pesawat("Boeing 747", 3500000000);
	$pesawat2->setTinggiMaks(4000);
	$pesawat2->setKecepatanMaks(1000);
	echo 'Biaya operasional pesawat '.$pesawat2->bacaMerek().
	'dengan harga Rp.'.$pesawat2->bacaHarga().
	' yang memiliki tinggi maksimum '.$pesawat2->bacaTinggiMaks().' feet ',
	'dan kecepatan maksimum '.$pesawat2->bacaKecepatanMaks().' km/jam adalah Rp.',
	''.$pesawat2->biayaOperasional();
	echo "<br>";

	$pesawat3 = new pesawat("Cassa", 750000000);
	$pesawat3->setTinggiMaks(1000);
	$pesawat3->setKecepatanMaks(200);
	echo 'Biaya operasional pesawat '.$pesawat3->bacaMerek().
	'dengan harga Rp.'.$pesawat3->bacaHarga().
	' yang memiliki tinggi maksimum '.$pesawat3->bacaTinggiMaks().' feet ',
	'dan kecepatan maksimum '.$pesawat3->bacaKecepatanMaks().' km/jam adalah Rp.',
	''.$pesawat3->biayaOperasional();



	/*
	$kendaraan5 = new kendaraan("yamaha vixion","21juta");
	echo 'harga dari '.$kendaraan5->bacaMerek(). ' adalah Rp.'.$kendaraan5->bacaHarga();

	$kereta1 = new keretaApi("KA Lokomotif", 15000000000);
	$kereta1->setJumlahGerbong(20);
	echo 'jumlah gerbong dari '.$kereta1->bacaMerek().
			'yang seharga '.$kereta1->bacaHarga().
			'adalah '.$kereta1->bacaJumlahGerbong();
	*?

	/*
	$kendaraan1 = new kendaraan();
	$kendaraan1->setMerek('Yamaha MIO');
	$kendaraan1->setHarga(10000000);
	$kendaraan1->setJumlahRoda(2);
	$kendaraan1->setWarna('Merah');
	$kendaraan1->setBahanBakar('premium');
	$kendaraan1->setTahunPembuatan(2007);

	//echo $kendaraan1->statusHarga();
	//echo $kendaraan1->dapatSubsidi();
	//echo $kendaraan1->hargaSecond();
	echo 'kendaraan ' .$kendaraan1->bacaMerek(). ',memiliki '.$kendaraan1->bacaJumlahRoda().' roda',' berbahan bakar'
	.$kendaraan1->bacaBahanBakar().'dan harganya Rp.'.$kendaraan1->bacaHarga(); 
	
	echo "<br>";
	$kendaraan2 = new kendaraan();
	$kendaraan2->setMerek('Toyota Yaris');
	$kendaraan2->setHarga(160000000);
	$kendaraan2->setJumlahRoda(4);
	$kendaraan2->setWarna('Merah');
	$kendaraan2->setBahanBakar('premium');

	//echo $kendaraan2->statusHarga(); 
	
	echo 'kendaraan ' .$kendaraan2->bacaMerek(). ',memiliki '.$kendaraan2->bacaJumlahRoda().' roda',' berbahan bakar'
	.$kendaraan2->bacaBahanBakar().'dan harganya Rp.'.$kendaraan2->bacaHarga(); 	
	echo "<br>";

	$kendaraan3 = new kendaraan();
	$kendaraan3->setMerek('Honda Scoopy');
	$kendaraan3->setHarga(13000000);
	$kendaraan3->setJumlahRoda(2);
	$kendaraan3->setWarna('Putih');
	$kendaraan3->setBahanBakar('premium');

	//echo $kendaraan3->statusHarga();
	
	echo 'kendaraan ' .$kendaraan3->bacaMerek(). ',memiliki '.$kendaraan3->bacaJumlahRoda().' roda',' berbahan bakar'
	.$kendaraan3->bacaBahanBakar().'dan harganya Rp.'.$kendaraan3->bacaHarga(); 
	echo "<br>"; 

	$kendaraan4 = new kendaraan();
	$kendaraan4->setMerek('Isuzu panther');
	$kendaraan4->setHarga(170000000);
	$kendaraan4->setJumlahRoda(4);
	$kendaraan4->setWarna('Hitam');
	$kendaraan4->setBahanBakar('solar');

	//echo $kendaraan4->statusHarga();
	echo 'kendaraan ' .$kendaraan4->bacaMerek(). ',memiliki '.$kendaraan4->bacaJumlahRoda().' roda',' berbahan bakar'
	.$kendaraan4->bacaBahanBakar().'dan harganya Rp.'.$kendaraan4->bacaHarga(); 
	*/
	
?>