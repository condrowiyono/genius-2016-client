<?php
session_start();
require("set.koneksi.php");
$email = $_SESSION['email'];
$pass = $_SESSION['password'];
	    $query2 = "update tbpeserta set
				jalurpenyisihan 		='".$_POST['jalurpenyisihan']."'
				where email   			='".$email."' and password  = '".$pass."'";
		$hasil= mysqli_query($link, $query2) or die("Kesalahan pada query!");		
if ($hasil)
			{	
		echo '<script type="text/javascript">';
                echo 'parent.location.href="peserta.php";';
		echo '</script>';	
	
		}
?>