<!-- PHP MYSQL DULU UNTUK AMBIL DATA PESERTA 
dibuat untuk penyisihan
-->

<?php
	//menyembunyikan notifikasi error
    error_reporting(0);

    //sesi dumulai untuk keperluan login dan sebagainya
    session_start();

    //membutuhkan koneksi
    require("../set.koneksi.php");

    //SQL nya
    $query = "select * from tbpeserta where email='".$_SESSION['email']."' and password='".$_SESSION['password']."'";
    
    //hasil dari sql
    $hasil = mysqli_query($link, $query) or die("Kesalahan pada query 2!");     
    
    //ambil data nya
    $barisdata = mysqli_fetch_array($hasil);

?>
<!-- JUDUL -->
<div class="judul" id="judul">
	Kuisioner GENIUS 2016
</div>

<!-- ISINYA -->
<div class="tiket">	
</div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/569e3492ee5bfa4d0c682e5d/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End ofawk.to Script-->