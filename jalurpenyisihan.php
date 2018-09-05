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
    <title>GENIUS 2016</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
	<script src="sweetalert-master/dist/sweetalert-dev.js"></script>
  	<link rel="stylesheet" href="sweetalert-master/dist/sweetalert.css">
    <!--preview-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
<body>
<div >
  <form method="POST" enctype="multipart/form-data" id="jalurpenyisihan" action="set.jalurpenyisihan.php">
    <h2>2. Edit Jalur Penyisihan</h2>
    <p>Penyisihan GENIUS 2016 Akan dilaksanakan melalui dua jalur penyisihan, yaitu</p>
    <p><h3>Penyisihan Offline</h3>
    <br>Akan dilaksanakan di kampus SMA N SBBS Sragen
    <br>Jl. Gemolong Asri No. 1, Gemolong, Sragen, Jawa Tengah </p>
    <p><h3>Penyisihan Online</h3></p>
    <br>
    <div id="JalurFormGroup" class="form-group">
      <label for="jalurpenyisihan">Jalur Penyisihan</label>
      <label class="error-text">Password bebas</label>
      <div >
       <?php 
		if ($barisdata['jalurpenyisihan']=='Offline') {
		echo "<select name=jalurpenyisihan class=form-control>
           	  <option></option>
              <option selected=selected>Offline</option>
              <option>Online</option> </select>";}  
		else if ($barisdata['jalurpenyisihan']=='Online'){
		echo "<select name=jalurpenyisihan class=form-control>
           	  <option></option>
              <option>Offline</option>
              <option selected=selected>Online</option> </select>";}  
		else{
		echo "<select name=jalurpenyisihan class=form-control>
           	  <option selected=selected></option>
              <option>Offline</option>
              <option>Online</option> </select>";} ?>
    </div> 
    </div>    
    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> Simpan</button> 
  </form>
</div>
</body>
</html>