<!-- LAST UPADATE BY 03/1/2016  16:48 
penambahan fitur seperti :
o hitung mundur
-->

<?php
	//menyembunyikan notifikasi error
    error_reporting(0);

    //sesi dumulai untuk keperluan login dan sebagainya
    session_start();

    //membutuhkan koneksi
    require("../../set.koneksi.php");

    //SQL nya
    $query = "select selesai from tbpenyisihan where email='".$_SESSION['email']."'";
    
    //hasil dari sql
    $hasil = mysqli_query($link, $query) or die("Kesalahan pada query 1!");     
    
    //ambil data nya
    $barisdata = mysqli_fetch_array($hasil);

	$akhir = 1415457091;

	$timestamp=1415457091;
	
	if ($barisdata['selesai']=='') {
		$beda = 1 ;
		} else {

	$future=		strtotime($barisdata['selesai']);
	$current=		time();
	$beda=			$future - $current;
	if ($beda < 0) {
		echo '<script type="text/javascript">
           		window.location = "../1/setringkas.php"
      			</script>';
	} else {
		$menit= 		floor($beda/60);
		$jam=			floor($beda/3600);
		$r_menit=		floor(($beda-($jam*3600))/60);
		$r_detik=		floor($beda-($menit*60));
	
		echo '<b>'.$jam.'</b>' .' jam '.'<b>'.$r_menit.'</b>'.' menit '.'<b>'.$r_detik.'</b>'. ' detik' ;
	};
	};
?>
