<?php
	class operasiBilangan{
		private $bilangan1;
		private $bilangan2;

		function __construct($x, $y)
		{
			$this->bilangan1 = $x;
			$this->bilangan2 = $y;
		}

		function bacaBilangan1()
		{
			return $this->bilangan1;
		}
		function bacaBilangan2()
		{
			return $this->bilangan2;
		}

		function jumlahkan()
		{
			$hasil = $this->bacaBilangan1() + $this->bacaBilangan2();
			return $hasil;
		}

		function perkalian()
		{
			$hasil = $this->bacaBilangan1() * $this->bacaBilangan2();
			return $hasil;
		}

		function pengurangan()
		{
			$hasil = $this->bacaBilangan1() - $this->bacaBilangan2();
			return $hasil;
		}

		function modulo()
		{
			$hasil = $this->bacaBilangan1() % $this->bacaBilangan2();
			return $hasil;
		}

	//	function pangkat()
	//	{
	//		$hasil = $this->bacaBilangan1 pow $this->bacaBilangan2();
	//		return $hasil;
	//	}


	}

	$operasi1 = new operasiBilangan(4, 5);

	echo $operasi1->bacaBilangan1().' + ' .$operasi1->bacaBilangan2().' = ' .$operasi1->jumlahkan();
	echo '<br>';
	echo $operasi1->bacaBilangan1(). ' * '.$operasi1->bacaBilangan2(). ' = ' .$operasi1->perkalian();
 	echo '<br>';
 	echo $operasi1->bacaBilangan1().' - '.$operasi1->bacaBilangan2(). ' = '.$operasi1->pengurangan();
 	echo "<br>";
 	echo $operasi1->bacaBilangan1().' % '.$operasi1->bacaBilangan2().' = '.$operasi1->modulo();
 	echo "<br>";
 	//echo $operasi1->pangkat();

?>