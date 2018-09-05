<?php
session_start();
require("set.koneksi.php");
$query = "select * from tbpeserta where email='".$_SESSION['email']."' and password='".$_SESSION['password']."'";
$hasil = mysqli_query($link, $query) or die("Kesalahan pada query!");		
$barisdata = mysqli_fetch_array($hasil);

// Where the file is going to be placed 
$target_path = 'potoprofil/g16-'.$barisdata['namatim'].'-';
$target_path = $target_path . basename( $_FILES['poto']['name']); 

if(move_uploaded_file($_FILES['poto']['tmp_name'], $target_path)) {
    echo "Gambar Profil  ".  basename( $_FILES['poto']['name']). 
    " berhasil diunggah";
} else{
    echo "There was an error uploading the file, please try again!";
}
$query2 = "update tbpeserta set
		  poto		      = '".$target_path."'
		  where email	      = '".$_SESSION['email']."' and 																	                password  = '".$_SESSION['password']."'";
$hasil2 = mysqli_query($link, $query2) or die("Kesalahan pada query!");		
if ($hasil2)
			{	
		echo '<script type="text/javascript">';
                echo 'parent.location.href="peserta.php";';
		echo '</script>';	
	
		}

?>