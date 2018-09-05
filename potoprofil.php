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
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
<div>
  <form method="POST" enctype="multipart/form-data" id="potoprofil" action="set.potoprofil.php">
    <h2>4. Edit Foto Profil</h2>
    <p>Masukkan foto yang mengidenmtifikasikan grup kalian. Ukuran file maksimal 256 KB.</p>
    <p>Opsional</p>
    <br>
    <input type="hidden" >
    <div>
    <input name="poto" type='file' onchange="readURL(this);" />
    </div>
    <div style="background-color:#707070; width: 250px; height:250px;" class="form-group">
       <?php 
		if ($barisdata['poto']<>'') {
		echo "<img style=center id=blah src='".$barisdata['poto']."' width=250px height=250px />";}  
		else{
		echo "<img style=center id=blah src=#  width=250px height=250px />";} ?>
    </div>         
    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-upload"></span> Upload </button>
    <a href="javascript:sukses()"><input  type="button" class="btn btn-success" value="Selesai"></a>
  </form>
</div>
</body>
</html>