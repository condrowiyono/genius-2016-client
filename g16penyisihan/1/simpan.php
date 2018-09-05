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
	    $query2 = "update `tbpenyisihan` set
				`1`     			='".$_POST['soal1']."',
				`2`     			='".$_POST['soal2']."',
				`3` 				='".$_POST['soal3']."',
				`4`  				='".$_POST['soal4']."',
				`5`	  				='".$_POST['soal5']."',
				`6` 				='".$_POST['soal6']."',
				`7`					='".$_POST['soal7']."',
				`8`  				='".$_POST['soal8']."',
				`9` 				='".$_POST['soal9']."',
				`10` 				='".$_POST['soal10']."'
				where `email`   	='".$email."'
				"; 
	} elseif ($page=='2') {
			    $query2 = "update `tbpenyisihan` set
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
			    $query2 = "update `tbpenyisihan` set
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
			    $query2 = "update `tbpenyisihan` set
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
	} elseif ($page=='5') {
			    $query2 = "update `tbpenyisihan` set
				`41`     			='".$_POST['soal41']."',
				`42`     			='".$_POST['soal42']."',
				`43` 				='".$_POST['soal43']."',
				`44`  				='".$_POST['soal44']."',
				`45`	  			='".$_POST['soal45']."',
				`46` 				='".$_POST['soal46']."',
				`47`				='".$_POST['soal47']."',
				`48`  				='".$_POST['soal48']."',
				`49` 				='".$_POST['soal49']."',
				`50` 				='".$_POST['soal50']."'
				where `email`   	='".$email."'
				";
	} elseif ($page=='6') {
			    $query2 = "update `tbpenyisihan` set
				`51`     			='".$_POST['soal51']."',
				`52`     			='".$_POST['soal52']."',
				`53` 				='".$_POST['soal53']."',
				`54`  				='".$_POST['soal54']."',
				`55`	  			='".$_POST['soal55']."',
				`56` 				='".$_POST['soal56']."',
				`57`				='".$_POST['soal57']."',
				`58`  				='".$_POST['soal58']."',
				`59` 				='".$_POST['soal59']."',
				`60` 				='".$_POST['soal60']."'
				where `email`   	='".$email."'
				";
	} elseif ($page=='7') {
			    $query2 = "update `tbpenyisihan` set
				`61`     			='".$_POST['soal61']."',
				`62`     			='".$_POST['soal62']."',
				`63` 				='".$_POST['soal63']."',
				`64`  				='".$_POST['soal64']."',
				`65`	  			='".$_POST['soal65']."',
				`66` 				='".$_POST['soal66']."',
				`67`				='".$_POST['soal67']."',
				`68`  				='".$_POST['soal68']."',
				`69` 				='".$_POST['soal69']."',
				`70` 				='".$_POST['soal70']."'
				where `email`   	='".$email."'
				";
	} elseif ($page=='8') {
			    $query2 = "update `tbpenyisihan` set
				`71`     			='".$_POST['soal71']."',
				`72`     			='".$_POST['soal72']."',
				`73` 				='".$_POST['soal73']."',
				`74`  				='".$_POST['soal74']."',
				`75`	  			='".$_POST['soal75']."',
				`76` 				='".$_POST['soal76']."',
				`77`				='".$_POST['soal77']."',
				`78`  				='".$_POST['soal78']."',
				`79` 				='".$_POST['soal79']."',
				`80` 				='".$_POST['soal80']."'
				where `email`   	='".$email."'
				";
	} elseif ($page=='9') {
			    $query2 = "update `tbpenyisihan` set
				`81`     			='".$_POST['soal81']."',
				`82`     			='".$_POST['soal82']."',
				`83` 				='".$_POST['soal83']."',
				`84`  				='".$_POST['soal84']."',
				`85`	  			='".$_POST['soal85']."',
				`86` 				='".$_POST['soal86']."',
				`87`				='".$_POST['soal87']."',
				`88`  				='".$_POST['soal88']."',
				`89` 				='".$_POST['soal89']."',
				`90` 				='".$_POST['soal90']."'
				where `email`   	='".$email."'
				";
	} elseif ($page=='10') {
			    $query2 = "update `tbpenyisihan` set
				`91`     			='".$_POST['soal91']."',
				`92`     			='".$_POST['soal92']."',
				`93` 				='".$_POST['soal93']."',
				`94`  				='".$_POST['soal94']."',
				`95`	  			='".$_POST['soal95']."',
				`96` 				='".$_POST['soal96']."',
				`97`				='".$_POST['soal97']."',
				`98`  				='".$_POST['soal98']."',
				`99` 				='".$_POST['soal99']."',
				`100` 				='".$_POST['soal100']."'
				where `email`   	='".$email."'
				";
	} ;

		$hasil= mysqli_query($link, $query2) or die("Kesalahan pada query!");
		if ($hasil) {
			header('location:index.php?page='.$page);
		} 		
?>