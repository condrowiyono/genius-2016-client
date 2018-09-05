<?php
	// mulai php nya dan matikan notif error
	error_reporting(0);

	//membutuhkan koneksi 
	require("../../set.koneksi.php");

	//untuk menentukan kita di halaman berapa
	$page = $_GET['page'] ;

	//sesi dumulai untuk keperluan login dan sebagainya
    session_start();
    $email = $_SESSION['email'];

    if ($page=='1') {
	    $query2 = "update `tbsimulasi` set
				`1`     			='".$_POST['soal1']."',
				`2`     			='".$_POST['soal2']."',
				`3` 				='".$_POST['soal3']."',
				`4`  				='".$_POST['soal4']."',
				`5`	  			='".$_POST['soal5']."',
				`6` 				='".$_POST['soal6']."',
				`7`				='".$_POST['soal7']."',
				`8`  				='".$_POST['soal8']."',
				`9` 				='".$_POST['soal9']."',
				`10` 				='".$_POST['soal10']."'
				where `email`   	='".$email."'
				"; }
	elseif ($page=='2') {
			    $query2 = "update `tbsimulasi` set
				`11`     			='".$_POST['soal11']."',
				`12`     			='".$_POST['soal12']."',
				`13` 				='".$_POST['soal13']."',
				`14`  				='".$_POST['soal14']."',
				`15`	  			='".$_POST['soal15']."',
				`16` 				='".$_POST['soal16']."',
				`17`				='".$_POST['soal17']."',
				`18`  				='".$_POST['soal18']."',
				`19` 				='".$_POST['soal19']."',
				`20` 				='".$_POST['soal20']."'
				where `email`   	='".$email."'
				";
	} elseif ($page=='3') {
			    $query2 = "update `tbsimulasi` set
				`21`     			='".$_POST['soal21']."',
				`22`     			='".$_POST['soal22']."',
				`23` 				='".$_POST['soal23']."',
				`24`  				='".$_POST['soal24']."',
				`25`	  			='".$_POST['soal25']."',
				`26` 				='".$_POST['soal26']."',
				`27`				='".$_POST['soal27']."',
				`28`  				='".$_POST['soal28']."',
				`29` 				='".$_POST['soal29']."',
				`30` 				='".$_POST['soal30']."'
				where `email`   	='".$email."'
				";
	} elseif ($page=='4') {
			    $query2 = "update `tbsimulasi` set
				`31`     			='".$_POST['soal31']."',
				`32`     			='".$_POST['soal32']."',
				`33` 				='".$_POST['soal33']."',
				`34`  				='".$_POST['soal34']."',
				`35`	  			='".$_POST['soal35']."',
				`36` 				='".$_POST['soal36']."',
				`37`				='".$_POST['soal37']."',
				`38`  				='".$_POST['soal38']."',
				`39` 				='".$_POST['soal39']."',
				`40` 				='".$_POST['soal40']."'
				where `email`   	='".$email."'
				";
	} ;

		$hasil= mysqli_query($link, $query2) or die("Kesalahan pada query!");
		if ($hasil) {
			header('location:index.php?page='.$page);
		} 		
?>