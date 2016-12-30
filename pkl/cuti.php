<?php
/* HARVIACODE.COM
 * function hitungcuti($tglawal,$tglakhir,$delimiter)
 * parameter :
 * $tglawal dengan format dd-mm-yy;
 * $tglakhir dengan format dd-mm-yy;
 * $delimiter adalah tanda pemisah antara tgl bulan dan tahun, misalnya "/" atau "-"
 */
  
function hitungcuti($tglawal,$tglakhir,$delimiter) {
//    menetapkan parameter awal dan libur nasional
//    pada prakteknya data libur nasional bisa diambil dari database
 
//    $koneksi = mysqli_connect('localhost', 'root', '', 'harviacode');
//    $query = "SELECT * FROM liburnasional";
//    $result = mysqli_query($koneksi, $query);
//    while ($row = mysqli_fetch_array($result)) {
//        $liburnasional[] = tglindo($row['tgl']);
//    }
 
    $tgl_awal = $tgl_akhir = $minggu = $sabtu = $koreksi = $libur = 0;
    $liburnasional = array("01-05-2014","15-05-2014","27-05-2014","29-05-2014");
    
//    memecah tanggal untuk mendapatkan hari, bulan dan tahun
    $pecah_tglawal = explode($delimiter, $tglawal);
    $pecah_tglakhir = explode($delimiter, $tglakhir);
    
//    mengubah Gregorian date menjadi Julian Day Count
    $tgl_awal = gregoriantojd($pecah_tglawal[1], $pecah_tglawal[0], $pecah_tglawal[2]);
    $tgl_akhir = gregoriantojd($pecah_tglakhir[1], $pecah_tglakhir[0], $pecah_tglakhir[2]);
 
//    mengubah ke unix timestamp
    $jmldetik = 24*3600;
    $a = strtotime($tglawal);
    $b = strtotime($tglakhir);
    
//    menghitung jumlah libur nasional 
    for($i=$a; $i<$b; $i+=$jmldetik){
        foreach ($liburnasional as $key => $tgllibur) {
            if($tgllibur==date("d-m-Y",$i)){
                $libur++;
            }
        }
    }
    
//    menghitung jumlah hari minggu
    for($i=$a; $i<$b; $i+=$jmldetik){
        if(date("w",$i)=="0"){
            $minggu++;
        }
    }
    
//    menghitung jumlah hari sabtu
    for($i=$a; $i<$b; $i+=$jmldetik){
        if(date("w",$i)=="6"){
            $sabtu++;
        }
    }
 
//    dijalankan jika $tglakhir adalah hari sabtu atau minggu
    if(date("w",$b)=="0" || date("w",$b)=="6"){
        $koreksi = 1;
    }
    
//    mengitung selisih dengan pengurangan kemudian ditambahkan 1 agar tanggal awal cuti juga dihitung
    $jumlahcuti =  $tgl_akhir - $tgl_awal - $libur - $minggu - $sabtu - $koreksi + 1;
    return $jumlahcuti;
}
 
// jika anda menggunakan database, tambahkan fungsi berikut ini untuk mengubah format tanggal
//function tglindo($tgl){
//    // merubah dari yyyy-mm-dd menjadi dd-mm-yyyy
//    $p = explode('-', $tgl);
//    return $p[2].'-'.$p[1].'-'.$p[0];
//}
 
//cara penggunaan fungsi hitung cuti
$tgl_mulai = "14-05-2014";
$tgl_selesai = "20-05-2014";
 
echo "Awal cuti ".$tgl_mulai." dan Selesai cuti ".$tgl_selesai."<br/>";
echo "Jumlah cuti = ".  hitungcuti($tgl_mulai, $tgl_selesai,"-");
echo " hari kerja <br/>(hari sabtu,minggu dan libur nasional tidak dihitung) ";
 
/*output : 
Awal cuti 14-05-2014 dan Selesai cuti 20-05-2014
Jumlah cuti = 4 hari kerja
(hari sabtu,minggu dan libur nasional tidak dihitung) 
*/
?>