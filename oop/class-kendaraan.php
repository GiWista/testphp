<?php
class kendaraan
	{
		protected $jumlahRoda;
		public $warna;
		public $bahanBakar;
		public $harga;
		private $merek;
		public $tahunPembuatan;


		function statusHarga()
		{
			if ($this->harga > 50000000)
				{
					$status ="Mahal";
			}else{
				$status = "Murah";
				}
			return $status;
		}

		function dapatSubsidi()
		{
			if ($this->bahanBakar = "premium" && $this->tahunPembuatan < 2005) {
				$status = "Ya";
			}else{
				$status = "Tidak";
			}
			return $status;
		}

		function hargaSecond()
		{	
			if ($this->tahunPembuatan > 2005){
				$turun = @$harga * 0.2;
				$hargaBekas = @$harga - $turun;
			}
			elseif ($this->tahunPembuatan >=2000 && $this->tahunPembuatan <=2005) {
				$turun = @$harga * 0.3;
				$hargaBekas = @$harga - $turun;
			}else{
				$turun = $harga * 0.4;
				$hargaBekas = @$harga - $turun;
				}
				return $hargaBekas;
		
			}

		function setMerek($x)
		{
			$this->merek = $x;
		}

		function setHarga($x)
		{
			$this->harga = $x;
		}
		function setJumlahRoda($x)
		{
			$this->jumlahRoda = $x;
		}
		function setWarna($x)
		{
			$this->warna = $x;
		}
		function setBahanBakar($x)
		{
			$this->bahanBakar = $x;
		}
		function setTahunPembuatan($x)
		{
			$this->tahunPembuatan = $x;
		}

		function bacaMerek(){
			return $this->merek;
		}

		function bacaHarga(){
			return $this->harga;
		}
		function bacaBahanBakar(){
			return $this->bahanBakar;
		}
		function bacaJumlahRoda(){
			return $this->jumlahRoda;
		}


		function __construct($x, $y)
		{

			$this->merek = $x;
			$this->harga = $y;
		} 
	}

		class keretaApi extends kendaraan
		{
			public $jumlahGerbong;

			function setJumlahGerbong($x)
			{
				$this->jumlahGerbong = $x;
			}

			function bacaJumlahGerbong()
			{
				return $this->jumlahGerbong;
			}

		}


		class pesawat extends kendaraan
		{
			private $tinggiMaks;
			private $kecepatanMaks;


			function setTinggiMaks($x)
			{
				$this->tinggiMaks = $x;
			}
			function setKecepatanMaks($x)
			{

				$this->kecepatanMaks = $x;
			}

			function bacaTinggiMaks()
			{
				return $this->tinggiMaks;
			}
			function bacaKecepatanMaks()
			{
				return $this->kecepatanMaks;
			}

			function biayaOperasional()
			{
				if($this->tinggiMaks > 5000 && $this->kecepatanMaks > 800){
					$biaya = $this->harga * 0.3 ;
					echo $biaya;
				}elseif ($this->tinggiMaks >= 3000 AND $this->tinggiMaks <= 500 AND $this->kecepatanMaks >= 500 AND $this->kecepatanMaks <= 800) {
					$biaya = $this->harga * 0.2 ;
					echo $biaya;
				}elseif ($this->tinggiMaks < 3000 && $this->kecepatanMaks < 500) {
					$biaya = $this->harga * 0.1 ;
					echo $biaya;
				}else{
					$biaya = $this->harga * 0.05 ;
					echo $biaya;
				}
			}

		}
	

	?>
