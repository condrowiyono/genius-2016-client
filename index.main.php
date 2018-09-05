<?php
if ($_SESSION['statusLogin'] =="1")
{
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
    <title>Halaman Peserta | GENIUS 2016</title>
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
      <a class="navbar-brand" href="#">Halaman Peserta GENIUS 2016</a>
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
    <li class="active" >
      <a href="index.php"><span class="glyphicon glyphicon-home"></span><span class="link-text">Beranda</span></a>
    </li>
    <li  >
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
<div class="page-container-full">

  <div class="forum-header" style="overflow:hidden; background: url('img/background.png') scroll center / cover #ccc;">
  	<div style="color:#FFFCFC; font-size: 40px; font-weight: 400; margin: 80px 20px 20px 20px;"><b>Selamat Datang di Halaman Peserta GENIUS 2016</b></div>
  </div>
  <div style="margin:20px;">
  	<h1>Penjelasan Singkat Halaman Peserta</h1>
  	Dalam halaman ini, kalian dapat mendaftar sebagai peserta GENIUS 2016. Kami memberikan beberapa halaman menarik untuk diikuti oleh kalian semua.
	<br>
        <br>
        Halaman yang dapat kalian akses di sini adalah :
        <br>
         <ol>
         <li><b>Data Peserta.</b> Dalam halaman ini, kalian dapat mengisi biodata tim kalian, memilih jalur babak penyisihan, melengkapi pembayaran dan mengupload foto tim kalian semenarik mungkin.</li>
         <li><b>File.</b> Butuh beberapa latihan soal menarik ala GENIUS dari tahun ke tahun? Kalian dapat men-downloadnya beserta beberapa dokumen penting di halaman ini.</li>
         <li><b>Tes Online.</b> Latihan simulasi pun kami berikan kepada kalian untuk mengetahui tata cara penyisihan online di GENIUS 2016. Penyisihan online GENIUS 2016 pun akan dilaksanakan di halaman ini.</li>
         <li><b>Tentang.</b> Pengen tahu kakak-kakak keren yang terhubung dalam website ini. Check it out!</li>
         </ol> 
    
        <h1>Timeline Perlombaan</h1>
  	Di sini adalah tanggal-tanggal penting yang harus diperhatikan :
	<br>
        <ul type="square">
         <li>Pendaftaran Peserta GENIUS : </li>
          <ol type="I">
           <li>Gelombang I : 11 Oktober 2015 - 13 Desember 2015</li>
           <li>Gelombang II : 14 Desember 2015 - 24 Januari 2016</li>
<li><b>[ONE WEEK URGENT] </b>Deadline Pendaftaran diperpanjang sampai <b>31 Januari 2016 Pukul 07.30 WIB</b></li>
          </ol>
         <li>Penyisihan : 31 Januari 2016</li>
         <li>Perempat Final : 13 Februari 2016</li>
         <li>Semifinal dan Final : 14 Februari 2016</li>
        </ul>

        <h1 id="bayar" >Teknis Pembayaran</h1>
  	Dalam melakukan transaksi pembayaran pendaftaran GENIUS 2016, perhatikanlah beberapa hal berikut :
        <br>
        <ul>
          <li><h3>Nomor Rekening : <b>0559-01-013528-50-7</b></h3></li>
	  <li>Bank : Bank Rakyat Indonesia (BRI)</li>
          <li>Atas Nama : HATTA GUTAMA QQ GENIUS 2016</li>
          <li>Batas Waktu : 
           <ol type="I">
            <li>13 Desember 2015 (Gelombang I)</li>
            <li>24 Januari 2016 (Gelombang II) </li>
<li><b>[ONE WEEK URGENT] </b>Deadline Pendaftaran diperpanjang sampai <b>31 Januari 2016 Pukul 07.30 WIB</b></li>
           </ol>
          <li>Konfirmasikanlah melalui SMS dengan format <code><b>Nama_Tim//Asal_Sekolah//Tanggal_Transfer//Waktu_Transfer//Pemilik_Rekening_Pengirim//Sudah_Bayar</b></code></li>
          <li>Contoh : <code><b>GENIUS 16//SMPN SBBS//12 Desember 2015//17.43 WIB//Faridz Wira Dharma//Sudah Bayar</b></code>
          <li>Kirim SMS tersebut ke <b>0812-2763-3323</b> (Sdr. Anditya Bayu Murti)</li>
<a href="javascript:window.open('file/cetaktransfer.php','PEMBAYARAN GENIUS 2016','width=500,height=550')"><b>Klik di sini untuk melihat versi printable</b></a>
        </ul>
        <h1>Jangan Lupa Update!</h1>
  	Jangan lupa memperhatikan beberapa update dan berita penting yang akan terus diupdate oleh panitia GENIUS 2016 <a href="https://genius-sbbs.com/news.html">di <b>News GENIUS SBBS</b></a>
</div>
	<script src="/js/jquery-1.11.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/js/bootstrap-datetimepicker.id.js"></script>
  </body>
</html>
<?php
     }
     else
     {
     header('Location:login.php');
     }
?>