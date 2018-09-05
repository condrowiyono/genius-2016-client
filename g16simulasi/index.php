<!-- 21:01 4/1/2016 
Autentifikasi dibuat biar gak diisi sembarangan

-->
<!DOCTYPE html>
<html>
    <head>
    <!-- deifinisikan karakter set -->
    <meta charset="utf-8">

    <!-- deifinisikan viewport, fitur baru di html5 biar bisa responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- definisikan favicon -->   
    <link href="favicon_16.ico" rel="shortcut icon" />
    <link href="favicon_16.ico" rel="bookmark" />

    <!-- definisikan deskripsi dari website -->
    <meta name="description" content="Penyisihan GENIUS 2016">
    <meta name="author" content="OSIS SMAN SBBS - ALUMNI">

    <!-- definisikan judul -->
    <title>Simulasi Penyisihan Online | GENIUS 2016</title>

    <!-- definisikan stylesheet / CSS -->
    <link rel="stylesheet" type="text/css" href="alat/gaya.css">    
    <script type="text/javascript" src="alat/jwaktu.js"></script>
    <script src="alat/jquery-1.11.3.min.js"></script>
    </head>
<body>
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
    $hasil = mysqli_query($link, $query) or die("Kesalahan pada query 2!");     
    
    //ambil data nya
    $barisdata = mysqli_fetch_array($hasil);
    
    if ($barisdata['sudah']=='sudah') { $bayar = '1' ;} else { $bayar ='0' ;} ;
    //cek apakah user sudah login atau belum
    if (($_SESSION['statusLogin'] =="1") and ($bayar=="1"))
     {
        //jika sudah tampilkan
        include("indexmain.php");
     }  
     else
     {
        //jika belum maka kembali ke laman login
        echo '<div class=tiket><div class=judul>Error</div><div class=isi>Pastikan Anda melakukan hal berikut ini:<br/>1. Pastikan Anda sudah login dengan 	benar</br>2. Sudah melakukan pembayaran</br>3. Sudah melakukan konfirmasi pendaftaran</div></div>';
        
     }
?>  
</body>
</html>