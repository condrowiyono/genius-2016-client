<?php
session_start();
//password kudu sama
if (($_POST['password'])<>($_POST['password2'])) {
header('location:register.php?kode=salah');
exit;}

// KODE
// the code was incorrect
// you should handle the error so that the form processor doesn't continue
// or you can use the following code if there is no validation or you do not know how

require("securimage/securimage.php");;
$securimage = new Securimage();
if ($securimage->check($_POST['captcha_code']) == false) {
	header('location:register.php?kode=kode');
	exit;
}

//DEFINISIKAN SEMUA FIELD DISINI
$email1 		= htmlentities($_POST['email'], ENT_QUOTES);
$password1	 	= htmlentities($_POST['password'], ENT_QUOTES);
$namatim1	 	= htmlentities($_POST['namatim'], ENT_QUOTES);
$poto1	 		= 'potoprofil/ini.jpg';
$telp1			= htmlentities($_POST['telp'], ENT_QUOTES);
$tanggal1	 	= date("Y-m-d H:i:s");
//AKHIR DEFINISI

//SIMPAN KE DATABASE
require("set.koneksi.php");
		$query2 = "INSERT INTO tbpeserta(email, password, namatim, poto, satutelp, sudah, timestamp) VALUES (
				'".$email1."',
				'".$password1."',
				'".$namatim1."',
				'".$poto1."',
                '".$telp1."',
                'tidak',
				'".$tanggal1."')";
		var_dump($query2);
		$hasil= mysqli_query($link, $query2) or die("Kesalahan pada query!");		
if ($hasil)
			{header("location:login.php?kode=sukses");				
			}
?>