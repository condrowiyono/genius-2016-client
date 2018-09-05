<?php
error_reporting(0);
session_start();
require("set.koneksi.php");
$query = "select * from tbpeserta where email='".$_SESSION['email']."' and password='".$_SESSION['password']."'";
$hasil = mysqli_query($link, $query) or die("Kesalahan pada query 2!");		
$barisdata = mysqli_fetch_array($hasil);
$namatim = $barisdata['namatim'];
$email = $barisdata['email'];
if ($_SESSION['statusLogin'] =="1")
{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Web GENIUS 2016">
    <meta name="author" content="OSIS SBBS dan ANTARES (c) 2015">
    <title>GENIUS 2016</title>
    <!-- Bootstrap core CSS -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/global.css" rel="stylesheet">
	<script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!--Start of Tawk.to Script--><script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5610b36c3e33bee649f5b011/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
	</script><!--End of Tawk.to Script-->
  </head>

  <body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">

    <div class="navbar-header pull-left">
      <a class="navbar-brand" href="#">GENIUS 2016</a>
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
    <li  class="active" >
      <a href="peserta.php"><span class="glyphicon glyphicon-user"></span><span class="link-text">Data Peserta</span></a>
    </li>
    <li  >
      <a href="file.php"><span class="glyphicon glyphicon-folder-open"></span><span class="link-text">File</span></a>
    </li>
    <li  >
      <a href="tes.php"><span class="glyphicon glyphicon-tasks"></span><span class="link-text">Tes Online</span></a>
    </li>
    <li  >
      <a href="tentang.php"><span class="glyphicon glyphicon-phone"></span><span class="link-text">Tentang</span></a>
    </li>
  </ul>

  <ul class="nav nav-sidebar right">
    <li><a href="set.logout.php"><span class="glyphicon glyphicon-log-out"></span><span class="link-text">Logout</span></a></li>
  </ul>
</div>
  <div class="page-container-full" style="margin:20px;">
  <!--disini-->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Bukti Pembayaran</h4>
        </div>
        <div class="modal-body">
          <center><iframe id="bingkai" src="javascript:document.getElementById("bingkai").src = document.getElementById("tombol").href;" width="100%" height="300px" scrolling="no" frameborder="0"></iframe></center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>  
    </div>
  </div>
<!--akhir-->
	<div class="page-header">
		<h1>Profil <small><?php echo $namatim ?></small></h1>
	</div>
	<div class="row">
	<div class="col-sm-3">
    <div style="background: url('<?php echo $barisdata['poto'] ?>') repeat scroll center center / cover #aaa; padding-bottom:100%;"></div> 
<br>		
<a href="peserta.php">Edit data diri</a>	
</div>
	<div class="col-sm-9">
    <h2><?php echo $namatim ?></h2>
    <span class="field-header">ASAL SEKOLAH</span>
    <p><?php echo $barisdata['sekolahasal'] ?> - <?php echo $barisdata['notelpsekolah'] ?></p>
    <span class="field-header">PENDAMPING</span>
    <p><?php echo $barisdata['gurunama'] ?> - <?php echo $barisdata['gurutelp'] ?></p>
    <span class="field-header">ANGGOTA</span>
    <p>1. <?php echo $barisdata['satunama'] ?> (<?php echo $barisdata['satugender'] ?>) - <?php echo $barisdata['satutelp'] ?><br>
    <p>2. <?php echo $barisdata['duanama'] ?> (<?php echo $barisdata['duagender'] ?>) - <?php echo $barisdata['duatelp'] ?><br>
    <p>3. <?php echo $barisdata['tiganama'] ?>(<?php echo $barisdata['tigagender'] ?>) - <?php echo $barisdata['tigatelp'] ?><br>
    </p>
    <span class="field-header">JALUR PENYISIHAN</span>
    <p><?php echo $barisdata['jalurpenyisihan'] ?></p>
    <span class="field-header">BUKTI PEMBAYARAN</span>
    <p><?php echo $barisdata['buktitransfer'] ?><a href="set.tampilpoto.php?email=<?php echo $email;?>" id="tombol" data-toggle="modal" data-target="#myModal"> [Tampilkan]</a></p>
</div>
</div>
				
</div>
</div>
  </body>
</html>
<?php
     }
     else
     {
     header('Location:login.php');
     }
?>