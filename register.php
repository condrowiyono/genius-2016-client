<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="GENIUS (Genbilboards English N’ Science Cups) adalah ajang kompetisi bergengsi dalam bidang Sains (Matematika, Biologi, dan Fisika) dan Bahasa Inggris tingkat SMP Sederajat dalam lingkup nasional terbuka dengan sistem online dan offline." name="description" />
    <meta content="SBBS, Genius, genius 2016, sragen bilingual boarding school, lomba sains, lomba smp, lomba bahasa inggris, ajang, kompetisi, lomba tim, genbilboard, science n' english cups, daftar, pendaftaran, register, registration, mendaftar, enroll" name="keywords" />
    <link href="favicon_16.ico" rel="shortcut icon" />
    <link href="favicon_16.ico" rel="bookmark" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Web GENIUS 2016">
    <meta name="author" content="OSIS SBBS dan ANTARES (c) 2015">
    <title>Pendaftaran | GENIUS 2016</title>
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
<div class="container">
  <form class="form-register callout" method="POST" id="register" action="set.register.php">
    <h1>Daftar</h1>        
        <?php
        //menampilkan notification
        error_reporting(0);
        $ko = $_GET['kode'];
        if ($ko==salah) { 
        ?>
        <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
        <strong>Salah!</strong> Passwordnya kok tidak sama?
        </div>
        <?php
        } else
        if ($ko==kode) {
        ?>
        <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Salah!</strong> Kodenya salah. Hanya memastikan apakah anda manusia.
        </div>
        <?php
        } else
        if ($ko==sukses) {
        ?> 
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Sukses!</strong> Berhasil. Silakan login di laman <a href="login.php">ini.</a>
        </div>
        <?php } ?> 
    <br>
    <div id="nimFormGroup" class="form-group">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" class="form-control" required autofocus >
       <span id="helpBlock" class="help-block">Pastikan email yang anda isi valid karena digunakan untuk keperluan konfirmasi lomba</span>
      <label class="error-text">Pastikan Email Aktif</label>
    </div>
    <div id="timFormGroup" class="form-group">
      <label for="namatim">Nama Tim<br>
      </label>
      <input type="text" id="namatim" name="namatim" class="form-control" required autofocus>
      <label class="error-text">Tuliskan Nama Tim</label>
    </div>
    <div id="passFormGroup" class="form-group">
      <label for="Password">Password</label>
      <input type="password" id="password" name="password" class="form-control" required autofocus>
      <label class="error-text">Password bebas</label>
    </div>
    <div id="pass2FormGroup" class="form-group">
      <label for="Password2">Ulangi Password</label>
      <input type="password" id="password2" name="password2" class="form-control" required autofocus>
      <label class="error-text">Password bebas</label>
    </div>
    <div id="telpFormGroup" class="form-group">
      <label for="telp">Nomor Telepon</label>
      <input type="text" id="telp" name="telp" class="form-control" required autofocus>
      <label class="error-text">Silakan masukkan nomor telp yang bisa dihubungi</label>
    </div>
    <div id="kodeFormGroup" class="form-group">
      <label for="Kode">Kode</label><br>
      <img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" /><br>
<div class="row">
  <div class="col-md-8"><input type="text" name="captcha_code" size="10" maxlength="6" class="form-control"/></div>
  <div class="col-md-4"><a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false"><button class="btn">Ganti Gambar</button></a></div>
</div>
    </div>
	<br>
    <button class="btn btn-primary" type="submit">Daftar <span class="glyphicon glyphicon-log-in"></span></button> 
    <a href="index.php"><div class="btn">Batal</div></a>
  </form>
</div>
<br>
<br>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>