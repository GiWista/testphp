<?php
/*
$sekolah = array(1, 2, 3, 4, 5, 6, 7, 8, 9,10,11,12,13,14,15);

//echo $sekolah[5];

$random_keys = array_rand($sekolah,14);
$rand = rand(0, 14);

$acak = $sekolah[$rand];

	$before = $acak[$rand - 1] ;
	$after = $acak[$rand + 1];

	if($acak < $before){

		$best_neighbor = $before;

	}elseif ($acak < $after) {

		$best_neighbor = $after;

	}
	$hasil = $best_neighbor;


echo "hasil".$hasil;












/*
foreach ($sekolah as $key => $value)
 {
 		$after = $sekolah+1;
 		$before = $sekolah-1;

 		$sementara = 0;

 		if($after > $sementara){

 			$sementara = $after;
 		}
 		elseif($before > $sementara) {
 			$sementara = $before;
 		}

 		echo $sementara;
 }; */

?>

<?php
/*$r = array(0,0,0,0,0,0,0,0,0,0,0);
for ($i=0;$i<1000000;$i++) {
  $n = rand(0,100000);
  if ($n<=10) {
    $r[$n]++;
  }
}
print_r($r);  */

$a = 70;

if($a>=80 && $a<=100){
	echo "anda Mendapatkan nilai A";
}elseif($a>=70 && $a<=79){
	echo "anda Mendapatkan nilai B";
}elseif ($a>=60 && $a<=69)
 {
	echo "anda mendapatkan nilai C";
}else{
	echo "anda mendapatkan nilai D";
}

?>
