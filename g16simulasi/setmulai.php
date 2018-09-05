<?php
	//menyembunyikan notifikasi error
    error_reporting(0);

    //sesi dumulai untuk keperluan login dan sebagainya
    session_start();

    //membutuhkan koneksi
    require("../set.koneksi.php");

    //SQL nya
    $query = "select * from tbpeserta where email='".$_SESSION['email']."' and password='".$_SESSION['password']."'";
    
    //hasil dari sql
    $hasil = mysqli_query($link, $query) or die("Kesalahan pada query 1!");     
    
    //ambil data nya
    $barisdata = mysqli_fetch_array($hasil);
	

	$awal = date('Y-m-d H:i:s');
	$akhir = date('Y-m-d H:i:s', strtotime($awal . ' + 120 minute'));
	$sudah = 'belum';

	$query2 = "INSERT INTO tbsimulasi(email,namatim,sekolah,mulai,selesai,sudah) VALUES (
				'".$barisdata['email']."',
				'".$barisdata['namatim']."',
				'".$barisdata['sekolah']."',
				'".$awal."',
				'".$akhir."',
				'".$sudah."')";
	
	$hasil2 = mysqli_query($link, $query2) or die("<div class=tiket><div class=judul>Error</div><div class=isi>Setiap Tim hanya diperbolehkan mengisi simulasi satu kali. </div></div>");

	if ($hasil2) {
		header('location:1');
	} else {
		echo "<div class=tiket><div class=judul>Error</div><div class=isi>Setiap Tim hanya diperbolehkan mengisi simulasi satu kali. </div></div>";
	};

?>