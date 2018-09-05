<!-- LAST UPADATE BY 04/1/2016  19:54
HALAMAN RINGKASAN JAWABAN
OK OK
-->
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
	<title>	Jawaban | GENIUS 2016 </title>

	<!-- definisikan stylesheet / CSS -->
	<link rel="stylesheet" type="text/css" href="../alat/gaya.css">

	<!-- little javascript -->
	<script src="../ckeditor/ckeditor.js"></script>
	<script>
	  window.onload = function(){
	    CKEDITOR.replace('contenteditor');
	  };
	</script>
	</head>
<body>

<!-- JUDUL -->
<div id="atas">

<div class="didalamnya">
	
	 <h2>Penyisihan Online GENIUS 2016 <a class="tombol" href="index.php" style='position:absolute;Top:5px;right:5px;'>Kembali</a> </h2>
</div>
</div>

<!-- TIKET / LANDING PAGENYA -->
<div class="section group">
	<div class="tiket">
<!-- CODE HERE -->
		<?php require("../../set.koneksi.php");?>
		<div class="judul border">Jawaban</div>
		<div class="isi">
		<div>
			<div>
				<?php 
				require("../../set.koneksi.php");
			    //menyembunyikan notifikasi error
			    error_reporting(0);

			    //sesi dumulai untuk keperluan login dan sebagainya
			    session_start();
   				 $email = $_SESSION['email'];

				$query2 = "SELECT * FROM tbpenyisihan where email ='".$email."'";
				$hasil= mysqli_query($link, $query2) or die("Kesalahan pada query!");
				$barisdata = mysqli_fetch_array($hasil);
				$nomor = 1 ;
				while ($nomor <= 100) {
				?>

				<div class="section group">
				<div class="col u1">
				<?php 	echo $nomor ;
						?>

				</div>
				<div class="col u10">
				<?php echo $barisdata[$nomor];
						$nomor++ ;?>
				</div>	
				<?php } ?>
				
			</div>
			<div class="tengah">
			
			<form action="setringkas.php" method="POST">
				<button type="submit" class="tombol">Kirim</button>
			</form>
			</div>	
		</div>
		</div>
		<!-- END HERE -->
	</div>

	<!-- BARU DITAMBAHKAN 20:08 2/1/2016 -->
</div>

<!-- FOOTER -->
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
<!--End of Tawk.to Script-->

</body>
</html>