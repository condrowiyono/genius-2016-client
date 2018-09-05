<?php
session_start();
require("set.koneksi.php");
$email = $_SESSION['email'];
$pass = $_SESSION['password'];
var_dump($_POST);
	    $query2 = "update tbpeserta set
				namatim     			='".$_POST['namatim']."',
				password     			='".$_POST['password']."',
				sekolahasal 				='".$_POST['sekolah']."',
				notelpsekolah  			='".$_POST['sekolahtelp']."',
				gurunama 		  			='".$_POST['guru']."',
				gurutelp 				='".$_POST['gurutelp']."',
				satunama 				='".$_POST['satunama']."',
				satuttl  				='".$_POST['satuttl']."',
				satutelp 				='".$_POST['satutelp']."',
				satugender 				='".$_POST['satugender']."', 
				duanama					='".$_POST['duanama']."',
				duattl					='".$_POST['duattl']."',
				duagender 				='".$_POST['duagender']."', 
				tiganama				='".$_POST['tiganama']."',
				tigattl					='".$_POST['tigattl']."',
				tigagender 				='".$_POST['tigagender']."'
				where email   			='".$email."'";
		var_dump($query2);
		$hasil= mysqli_query($link, $query2) or die("Kesalahan pada query222!");		

if ($hasil)
			{	
		echo '<script type="text/javascript">';
                echo 'parent.location.href="peserta.php";';
		echo '</script>';	
	
		}
?>