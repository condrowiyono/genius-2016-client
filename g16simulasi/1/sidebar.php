<!-- LAST UPADATE BY 03/1/2016  16:48 
penambahan fitur seperti :
o timer mundur menggunakan fitur auto update tulisan di php dengan bantuan javascript
o file penting : countdown.php , jwaktu.js, jquery.js
-->

<head>
	<script type="text/javascript" language="javascript" src="../alat/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="../alat/jwaktu.js"></script>
</head>
<div class="judulan" posisi><b>Sisa Waktu</b></div>
<div class="isian"><div id="waktu">Waktu Mengerjakan</div> </div> 
	<?php
	    //menyembunyikan notifikasi error
	    error_reporting(0);

	    //sesi dumulai untuk keperluan login dan sebagainya
	    session_start();

	    //cek apakah user sudah login atau belum
	    if ($_SESSION['statusLogin'] =="1")
	     {
	        //jika sudah tampilkan
	 ?>
		<a href="https://www.dropbox.com/s/atjw2z5380ip1k6/SIMULASI%20GENIUS%202016.pdf?dl=1"><div id="judulan"><b>Download Soal</b></div></a>
		<div class="isian"></div> 
	<?php } else { echo '';}; ?>

<a href="ringkas.php" ><div class="judulan tombolbawah border">Cek Jawaban</div></a>
<div class="isian"></div> 