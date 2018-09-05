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
	Penyisihan Online GENIUS 2016
</div>

<!-- TIKET / LANDING PAGENYA -->
<div class="section group">
	<div class="tiket">	
		<div class="isi tengah" id="welcome">
			Selamat Datang Di Halaman  Penyisihan Online<br />
			GENIUS 2016
		</div>

		<div class="isi" id="identitas">
		<strong>IDENTITAS</strong>
			<div class="section group">
				<div class="col u6">
					<div class="section group" id="namatim">
						<div class="col u4">
						<strong>Nama Tim :</strong>
						</div>
						<div class="col u8">
						<?php echo $barisdata['namatim']; ?>
						</div>
					</div>
					<div class="section group" id="sekolah asal">
						<div class="col u4">
						<strong>Sekolah Asal :</strong>
						</div>
						<div class="col u8">
						<?php echo $barisdata['sekolahasal']; ?>
						</div>
					</div>
				</div>
				<div class="col u6" id="anggota">
					<div class="" id="anggota 1">		
						<?php echo $barisdata['satunama']; ?>
					</div>
					<div class="" id="anggota 2">		
						<?php echo $barisdata['duanama']; ?>
					</div>
					<div class="" id="anggota 3">		
						<?php echo $barisdata['tiganama']; ?>
					</div>
				</div>
			</div>
		</div>

		<div class="asa" id="peraturan">
			<strong> PERATURAN </strong>
			<ol>
			<li>Berdoalah sebelum mengerjakan.</li>
<li>Silahkan Download Petunjuk Pengerjaan terlebih dahulu.</li>
<li>Gunakan Perangkat dan Koneksi yang memadai.</li>
			<li>Tidak diizinkan bekerja sama dengan siapapun kecuali teman satu tim.</li>
			<li>Setiap tim hanya bisa login <b>1 KALI.</b></li>
<li>Mohon <b>TIDAK MENUTUP</b> Halaman Penyisihan, karena jika tertutup tidak dapat masuk kembali.</li> 
			<li>Isilah jawaban Anda di halaman yang telah disediakan.</li>	
			<li>Setiap halaman berisi 10 soal dan jawaban</li>
			<li>Klik <b>SIMPAN</b> pada bagian bawah halaman sebelum melanjutkan ke halaman berikutnya</li>
			<li>Model penyisihan babak penyisihan online ini adalah pilihan ganda: memilih maksimum <b>SATU</b> jawaban untuk setiap soal.</li>
			<li>Dalam penyisihan ini terdapat 100 soal dengan komposisi : 25 soal Matematika, 20 soal Biologi, 20 soal Fisika, 15 soal Logika, dan 20 soal Bahasa Inggris.</li>
			<li>Jawaban benar = <b>+3</b>, salah = <b>-1</b> dan kosong = <b>0</b>.</li>
			<li>Waktu untuk penyisihan babak penyisihan adalah <b>120 menit</b>.</li>
			<li>Soal bisa di download jika diperlukan.</li>
			<li>Selalu <b>tuliskan jawaban di kertas</b> untuk berjaga-jaga jika terjadi masalah pada server.</li>
			<li>Silahkan bertanya melalui live chat GENIUS 2016 jika terdapat masalah.</li>
			<li>Dalam lomba ini peserta dilarang :
				<ol>
					<li>Menggunakan alat komunikasi (handphone, PDA, dll) selama mengikuti babak penyisihan ini.</li>
					<li>Menggunakan alat bantu hitung (kalkulator, dll).</li>
					<li>Menggunakan buku / referensi / catatan / kamus selain berkas soal ini. </li>
					<li>Bekerja sama dengan kelompok lain. </li>
				</ol>
			</li>
<li>Untuk mengecek semua jawaban yang sudah terisi silahkan klik <b> CEK JAWABAN</b>.</li>
			<li>Apabila kalian telah selesai mengerjakan sebelum waktu berakhir, silahkan klik tombol <b>KIRIM</b>.</li>
<li>Jawaban yang sudah dikirim tidak bisa diubah.</li>
			<li>Waktu pengiriman diperhitungkan.</li>
			<li>Waktu mengkases mulai <b>09.00 hingga 15.00 WIB.</b></li>
<li>Setelah pukul 15.00 WIB link akan <b>DITUTUP</b>.</li>
			</ol>
		</div>
	<form  class="oso" padding-top="0em" method="POST" action="setmulai.php">
		<input type="checkbox" name="checkbox" value="check"/> <b>Saya telah membaca dan memahami peraturan Penyisihan Online GENIUS 2016</b> 
		<br><br>
		<div align="center">
		 <a class="tombol" target="_blank" href="https://drive.google.com/file/d/0B80AQarudNJTV0t0aUdSQW93cUU/view?usp=sharing">Download Petunjuk</a> 	
<input type="submit" class="tombol" name="email_submit" value="MULAI" onclick="if(!this.form.checkbox.checked){alert('You must agree to the terms first.');return false}"  />
</div>
		
	</form>
	</div>
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