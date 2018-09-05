<?php
	require("../../set.koneksi.php");
	//sesi dumulai untuk keperluan login dan sebagainya
	session_start();
	$email = $_SESSION['email'];
	$query2 = "update tbsimulasi set
				sudah 			= 'sudah'
				where email 		='".$email."'";
	$hasil= mysqli_query($link, $query2) or die("Kesalahan pada query!");	
	
	if ($hasil) {
		header('location:selesai.php');
	} else {
		echo "gagal";
	}
?>