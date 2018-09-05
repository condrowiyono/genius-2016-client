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
    <title>Tes Online |  GENIUS 2016</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!--Start of Tawk.to  Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0]; 
s1.async=true; 
s1.src='https://embed.tawk.to/5610b36c3e33bee649f5b011/default'; 
s1.charset='UTF-8'; 
s1.setAttribute('crossorigin','*'); 
s0.parentNode.insertBefore(s1,s0); 
})();
</script>
<!--End of Tawk.to  Script-->
  </head>
  <body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">

    <div class="navbar-header pull-left">
      <a class="navbar-brand" href="#">GENIUS 2016 | Halaman Peserta</a>
    </div>

    <div class="navbar-header pull-right rightmost">
      <ul class="nav navbar-nav pull-right">
        <li class="pull-left">
          <a class="user-display" href="profil.php">
		  <?php  
		  echo ($namatim) ; 
          echo "<img class=profile-picture src='".$barisdata['poto']."'>";
		  ?>
          </a>
        </li>
      </ul>
    </div>

  </div>
</nav>
<div class="sidebar">
  <ul class="nav nav-sidebar">
    <li >
      <a href="index.php"><span class="glyphicon glyphicon-home"></span><span class="link-text">Beranda</span></a>
    </li>
    <li>
      <a href="peserta.php"><span class="glyphicon glyphicon-user"></span><span class="link-text">Data Peserta</span></a>
    </li>
    <li  >
      <a href="file.php"><span class="glyphicon glyphicon-folder-open"></span><span class="link-text">File</span></a>
    </li>
    <li class="active" >
      <a href="tes.php"><span class="glyphicon glyphicon-tasks"></span><span class="link-text">Tes Online</span></a>
    </li>
    <li >
      <a href="tentang.php"><span class="glyphicon glyphicon-phone"></span><span class="link-text">Tentang</span></a>
    </li>
  </ul>

  <ul class="nav nav-sidebar right">
    <li><a href="set.logout.php"><span class="glyphicon glyphicon-log-out"></span><span class="link-text">Logout</span></a></li>
  </ul>
</div>
<div class="page-container-full" style="margin:20px;">
	<div class="page-header">
		<h1>Tes Online GENIUS 2016</h1>
	</div>
	    <div>
    <p>Penyisihan GENIUS 2016</p>
    <div class="table-responsive">
  	<table class="table table-hover">
  	<thead>
	<tr>
	<th>Nama Tes</th><th>Link</th></tr>
	</thead>
	<tbody>
   <tr><td><del>Simulasi Penyisihan Online GENIUS 2016 Tahap 2</del></td><td><b>Selesai</b></td></tr>
    <tr><td><del>Penyisihan Online GENIUS 2016</del></td><td><del><b>Selesai</b></del></td></tr>
    <tr><td>Kuisioner GENIUS 2016</td><td>Segera</td></tr>
    </tbody>
    </table>
    </div>
    
    </div>
</div>  
	<script src="/js/jquery-1.11.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>