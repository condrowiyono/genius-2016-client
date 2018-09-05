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
	$berapa = $_POST['rating'];
	
	if ($berapa=='1') {
		$berapa = 'satu'; }
	else if ($berapa=='2') {
		$berapa = 'dua' ;}
	else if ($berapa=='3') {
		$berapa = 'tiga'; }
	else if ($berapa=='4') {
		$berapa = 'empat'; }
	else if ($berapa=='5') {
		$berapa = 'lima';};
	$tulis= 'We have made it in GENIUS 2016!. '. $berapa . ' bintang untuk GENIUS 2016. See other thought about GENIUS 2016';
	$line = 'http://line.me/R/msg/text/?' .$tulis .'%21%0d%0a https%3A//genius-sbbs.com/testimoni';
	$fb = 'https://www.facebook.com/sharer/sharer.php?u=https%3A//genius-sbbs.com/testimoni/';
	$twit = 'https://twitter.com/home?status=We%20have%20made%20it.%0AGENIUS%202016%0Ahttps%3A//genius-sbbs.com/testimoni/';
?>
<div class="tiket">
<div class="isi tengah">
<img src="https://genius-sbbs.com/img/logo%20header.png" class="tengah">
		Kalian memberikan <?php echo ' '.$berapa.' ';?>
		bintang untuk GENIUS 2016
</div>
<!-- ShAre -->
<div align="center">
	<a href="<?php echo $line; ?>"><img src="alat/line1.png" alt="LINE it!" /></a>
	<a href="<?php echo $fb; ?>"><img src="alat/fb1.png" alt="Share on Facebook!" /></a>
	<a href="<?php echo $twit; ?>"><img src="alat/twitter1.png" alt="Share on Twitter!" /></a>
</div>
</div>
</body>
</html>