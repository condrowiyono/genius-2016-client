<!-- LAST UPADATE BY 03/1/2016  16:48 
penambahan fitur seperti :
o pagination otomatis ( walaupun masih semi)
o soal buat sendiri disimpan sendiri 
o ditampilkan 10 10
o format tampilan
  |[jawaban]|[nomor|[pertanyaan + pilihan]|
REHAT DIMALAM YANG SUNYI PADA PUKUL 23:37
masih terbayang raut muka menawan mu untuk terus dihati
ini curhat tapi gapapa
oke penmabahan di fitur save dan sebagainya
o save
o retrive data


24 1 2016  diubah menjadi penyisihan
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
	<title>Penyisihan Online | GENIUS 2016</title>

	<!-- definisikan stylesheet / CSS -->
	<link rel="stylesheet" type="text/css" href="../alat/gaya.css">

	</head>
<body class="skrol">
<!-- JUDUL -->
<div id="atas">
<div class="didalamnya">
	<h2>Penyisihan Online GENIUS 2016</h2>
</div>
</div>

<!-- BAGIAN INTI SIDEBAR DAN PERTANYAAN -->
	<!-- SIDEBAR UNTUK NAVIGASI DAN SISA WAKTU -->
	<div id="kiri">
			<?php require("sidebar.php"); ?>
	</div>

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

	<!-- SOAL - SOAL -->
	<div id="dalam">
		<div class="didalamnya">
				<!-- SOAL DISINI -->
				<?php
				// mulai php nya dan matikan notif error
				error_reporting(0);

				//membutuhkan koneksi 
				require("../../set.koneksi.php");

				//untuk menentukan kita di halaman berapa
				$page = $_GET['page'] ;
				if ($_GET['page']=='') {
					$page = '1';
				};
				?>
				<form method="POST" action="<?php echo 'simpan.php?page='.$page ?>" >
				<?php
				//untuk page nya dan query nya
				if ($page=='1') {
						$query2 = "select * from tbsoal ORDER BY indeks ASC LIMIT 0,10";
					} else if ($page=='2') {
						$query2 = "select * from tbsoal ORDER BY indeks ASC LIMIT 10,10";
					} else if ($page=='3') {
						$query2 = "select * from tbsoal ORDER BY indeks ASC LIMIT 20,10";
					} else if ($page=='4') {
						$query2 = "select * from tbsoal ORDER BY indeks ASC LIMIT 30,10";
					} else if ($page=='5') {
						$query2 = "select * from tbsoal ORDER BY indeks ASC LIMIT 40,10";
					} else if ($page=='6') {
						$query2 = "select * from tbsoal ORDER BY indeks ASC LIMIT 50,10";
					} else if ($page=='7') {
						$query2 = "select * from tbsoal ORDER BY indeks ASC LIMIT 60,10";
					} else if ($page=='8') {
						$query2 = "select * from tbsoal ORDER BY indeks ASC LIMIT 70,10";
					} else if ($page=='9') {
						$query2 = "select * from tbsoal ORDER BY indeks ASC LIMIT 80,10";
					} else if ($page=='10') {
						$query2 = "select * from tbsoal ORDER BY indeks ASC LIMIT 90,10";
					} else {
						$query2 = "select * from tbsoal ORDER BY indeks ASC LIMIT 0,10";
					}

				//dapat kan hasil dari query
				$hasil2 = mysqli_query($link, $query2) or die("Kesalahan pada tabel soal");
				while ($row = mysqli_fetch_array($hasil2))
					{
				?>
						
						<div class="section group" id="<?php echo $row['indeks']; ?>">
							<!-- JAWABAN -->
							<div class="col u0">
								<select name="<?php echo 'soal'.$row['indeks']; ?>">
								<?php 
								    //SQL nya
								    $query3 = "select * from tbpenyisihan where email='".$_SESSION['email']."'";
								    
								    //hasil dari sql
								    $hasil3 = mysqli_query($link, $query3) or die("Kesalahan pada query 3!");     
								    
								    //ambil data nya
								    $barisdata3 = mysqli_fetch_array($hasil3);

								?>
								<option value="X" <?php if ($barisdata3[$row['indeks']]=='X') {echo "selected=selected";} ?>> 
									</option><option value="A" <?php if ($barisdata3[$row['indeks']]=='A') {echo "selected=selected";} ?> >A
									</option><option value="B" <?php if ($barisdata3[$row['indeks']]=='B') {echo "selected=selected";} ?>>B
									</option><option value="C" <?php if ($barisdata3[$row['indeks']]=='C') {echo "selected=selected";} ?>>C
									</option><option value="D" <?php if ($barisdata3[$row['indeks']]=='D') {echo "selected=selected";} ?>>D
									</option><option value="E" <?php if ($barisdata3[$row['indeks']]=='E') {echo "selected=selected";} ?>>E
								</option>
								</select>
							</div>

							<!-- NOMOR SOAL -->
							<div class="col u0">
								<?php echo $row['indeks']?>
							</div>

							<!--PERTANYAAN -->
							<div class="col u10">
								<div class="pertanyaan">
									<?php echo $row['pertanyaan']?>
								</div>
							</div>
						</div>
						<!--AKHIR PERNYATAAN -->

				<?php 
					} 

				?>
				<input type="submit" class="tombol" value="Simpan">
			
			
			
			<!-- UNTUK TOMBOL - TOMBOL -->
			<?php 
			//pagination ala gue
				if ($page=='1') {
					$lanjut = "?page=2";
					$kembali= "#"; 
				} else if ($page=='2') {
					$lanjut = "?page=3";
					$kembali= "?page=1";
				} else if ($page=='3') {
					$lanjut = "?page=4";
					$kembali= "?page=2";
				} else if ($page=='4') {
					$lanjut = "?page=5";
					$kembali= "?page=3";
				} else if ($page=='5') {
					$lanjut = "?page=6";
					$kembali= "?page=4";
				} else if ($page=='6') {
					$lanjut = "?page=7";
					$kembali= "?page=5";
				} else if ($page=='7') {
					$lanjut = "?page=8";
					$kembali= "?page=6";
				} else if ($page=='8') {
					$lanjut = "?page=9";
					$kembali= "?page=7";
				} else if ($page=='9') {
					$lanjut = "?page=10";
					$kembali= "?page=8";
				} else if ($page=='10') {
					$lanjut = "";
					$kembali= "?page=9";
				} 
				else {
					$lanjut = "?page=2";
				}
			?>
			<!-- awal -->
			<a class="tombol" href="?page=1"> Awal </a>

			<!-- kembali -->
			<a class="tombol" href="<?php echo $kembali;?>"> Kembali </a>

			<!--nomor -->
			<?php
			
			//deklarasi tombol terpilih 
			$hal = '';
			$num = 1;
			$tautan = '';

			while ( $num <= 10) {
				if ($num==$page) {
					$hal = 'terpilih';
				} else           {
					$hal = '';
				}
				$tautan = '?page='.$num ;
			?>

				<a class="tombol <?php echo $hal ?>" href="<?php echo $tautan ?>"> <?php echo $num; ?></a>
			<?php 
			$num++;
			}
			?>

			<!-- lanjut -->
			<a class="tombol" href="<?php echo $lanjut;?>"> Lanjut </a>

			<!-- akhir -->
			<a class="tombol" href="?page=10">Akhir</a>

			<!-- AKHIR DaRI TOMBOL - TOMBOL -->
			</form>
			
		<!-- AKHIR DARI SOAL -->
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
		<!--End of Tawk.to Script-->
	</div>
	<?php
	     }  
	     else
	     {
	        //jika belum maka kembali ke laman login
	        echo "<div id=dalam>Anda belum login</div>";
	     }
	?>  
	</div>
</div>


</body>
</html>