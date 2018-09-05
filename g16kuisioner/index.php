<!-- 21:01 4/1/2016 
Autentifikasi dibuat biar gak diisi sembarangan

25 1 2016 ini adalah template simulasi diubah menjadi penyisihan
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
    <title>Kuisioner | GENIUS 2016</title>

    <!-- definisikan stylesheet / CSS -->
    <link rel="stylesheet" type="text/css" href="alat/gaya.css">    
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
    
    //cek apakah user sudah login atau belum
    if (($_SESSION['statusLogin'] =="1"))
     {
        //jika sudah tampilkan dan akan mengisi kuisioner berdasarkan nama tim dan sekolah
        include("indexmain.php");
     }  
     else
     {
        //jika tidak maka akan otomatis mengaku sebagai tamu
        include("indextamu.php");
        
     }
?>  
</body>
</html>