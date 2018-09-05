<?php
error_reporting(0);
session_start();
require("set.koneksi.php");
$query = "select * from tbpeserta where email='".$_SESSION['email']."' and password='".$_SESSION['password']."'";
$hasil = mysqli_query($link, $query) or die("Kesalahan pada query 2!");		
$barisdata = mysqli_fetch_array($hasil);
$namatim = $barisdata['namatim'];
$email = $barisdata['email'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="favicon_16.ico" rel="shortcut icon" />
    <link href="favicon_16.ico" rel="bookmark" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Web GENIUS 2016">
    <meta name="author" content="OSIS SBBS dan ANTARES (c) 2015">
    <title>GENIUS 2016 | Data Peserta</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <!-- alert -->
	<script src="sweetalert-master/dist/sweetalert-dev.js"></script>
  	<link rel="stylesheet" href="sweetalert-master/dist/sweetalert.css">
    <!--simpan-->
	<script src="js/jquery-1.11.3.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
<body>
<div >
  <form  method="POST" id="datapeserta" action="set.datapeserta.php">
    <div id="judul"><h2>1. Edit Data Peserta</h2>
    <br>Isikan data dibawah ini dengan benar</div>
    <br>
    <div id="nimFormGroup" class="form-group">
      <label for="email">Email</label>
      <?php echo "<input type=text id=email name=email class=form-control disabled value=$email>"?>
      <label class="error-text">Pastikan Email Aktif</label>
    </div>
    <div id="timFormGroup" class="form-group">
      <label for="namatim">Nama Tim<br>
      </label>
      <?php echo "<input type=text id=namatim name=namatim class=form-control required value='".$barisdata['namatim']."'] >"?>
      <label class="error-text">Tuliskan Nama Tim</label>
    </div>
    <div id="passFormGroup" class="form-group">
      <label for="Password">Password</label>
      <?php echo "<input type=password id=password name=password class=form-control required value='".$barisdata['password']."'] >"?>
      <label class="error-text">Password bebas</label>
    </div>
    <div id="pass2FormGroup" class="form-group">
      <label for="Password2">Ulangi Password</label>
      <?php echo "<input type=password id=password2 name=password2 class=form-control required value='".$barisdata['password']."'] >"?>
      <label class="error-text">Password bebas</label>
    </div>
    <div id="sekolahFormGroup" class="form-group">
      <label for="sekolah">Sekolah</label>
      <?php echo "<input type=text id=sekolah name=sekolah class=form-control required value='".$barisdata['sekolahasal']."'] >"?>
      <label for="telpsekolah">No Telp Sekolah</label>
      <?php echo "<input type=text id=sekolahtelp name=sekolahtelp class=form-control value='".$barisdata['notelpsekolah']."'] >"?>
    </div>
    <div id="guruFormGroup" class="form-group">
      <label for="guru">Guru Pendamping</label>
       <?php echo "<input type=text id=guru name=guru class=form-control value='".$barisdata['gurunama']."'] >"?>
      <label for="gurutelp">No Telp Guru Pendamping</label>
       <?php echo "<input type=text id=gurutelp name=gurutelp class=form-control value='".$barisdata['gurutelp']."'] >"?>
    </div>
    <div id="satuFormGroup" class="form-group">
      <h3>Peserta Satu</h3>
      <label for="satunama">Nama</label>
       <?php echo "<input type=text id=satunama name=satunama class=form-control required value='".$barisdata['satunama']."'] >"?>
      <label for="satuttl">Tempat Tanggal lahir </label>
       <?php echo "<input type=text id=satuttl name=satuttl class=form-control required value='".$barisdata['satuttl']."'] >"?>
      <label for="satutelp"> No Telp</label>
       <?php echo "<input type=text id=satutelp name=satutelp class=form-control required value='".$barisdata['satutelp']."'] >"?>
      <label for="satugender"> Jenis Kelamin</label>
      <div >
       <?php 
		if ($barisdata['satugender']=='Laki-laki') {
		echo "<select name=satugender class=form-control>
           	  <option></option>
              <option selected=selected>Laki-laki</option>
              <option>Perempuan</option> </select>";}  
		else if ($barisdata['satugender']=='Perempuan'){
		echo "<select name=satugender class=form-control>
           	  <option></option>
              <option>Laki-laki</option>
              <option selected=selected>Perempuan</option> </select>";}  
		else{
		echo "<select name=satugender class=form-control>
           	  <option selected=selected></option>
              <option>Laki-laki</option>
              <option>Perempuan</option> </select>";} ?>
    </div>
    </div>
    <div id="duaFormGroup" class="form-group">
      <h3>Peserta Dua</h3>
      <label for="duanama">Nama</label>
       <?php echo "<input type=text id=duanama name=duanama class=form-control value='".$barisdata['duanama']."'] >"?>
      <label for="duattl">Tempat Tanggal lahir </label>
       <?php echo "<input type=text id=duattl name=duattl class=form-control value='".$barisdata['duattl']."'] >"?>
      <label for="duagender"> Jenis Kelamin</label>
       <?php 
		if ($barisdata['duagender']=='Laki-laki') {
		echo "<select name=duagender class=form-control>
           	  <option></option>
              <option selected=selected>Laki-laki</option>
              <option>Perempuan</option> </select>";}  
		else if ($barisdata['duagender']=='Perempuan'){
		echo "<select name=duagender class=form-control>
           	  <option></option>
              <option>Laki-laki</option>
              <option selected=selected>Perempuan</option> </select>";}  
		else{
		echo "<select name=duagender class=form-control>
           	  <option selected=selected></option>
              <option>Laki-laki</option>
              <option>Perempuan</option> </select>";} ?>
    </div>
    <div id="tigaFormGroup" class="form-group">
      <h3>Peserta Tiga</h3>
      <label for="tiganama">Nama</label>
       <?php echo "<input type=text id=tiganama name=tiganama class=form-control value='".$barisdata['tiganama']."'] >"?>
      <label for="tigattl">Tempat Tanggal lahir </label>
       <?php echo "<input type=text id=tigattl name=tigattl class=form-control value='".$barisdata['tigattl']."'] >"?>
      <label for="tigagender"> Jenis Kelamin</label>
       <?php 
		if ($barisdata['tigagender']=='Laki-laki') {
		echo "<select name=tigagender class=form-control>
           	  <option></option>
              <option selected=selected>Laki-laki</option>
              <option>Perempuan</option> </select>";}  
		else if ($barisdata['tigagender']=='Perempuan'){
		echo "<select name=tigagender class=form-control>
           	  <option></option>
              <option>Laki-laki</option>
              <option selected=selected>Perempuan</option> </select>";}  
		else{
		echo "<select name=tigagender class=form-control>
           	  <option selected=selected></option>
              <option>Laki-laki</option>
              <option>Perempuan</option> </select>";} ?>
    </div>
	<br>
    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> Simpan</button> 
  </form>
</div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>