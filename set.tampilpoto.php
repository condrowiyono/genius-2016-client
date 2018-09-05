<?php
$emailnya=$_GET["email"];
session_start();
require("set.koneksi.php");
$email = $_SESSION['email'];
$pass = $_SESSION['password'];
$query = "select * from tbpeserta where email='".$emailnya."'";
$hasil = mysqli_query($link, $query) or die("Kesalahan pada query!");		
$barisdata = mysqli_fetch_array($hasil);
$gambar=$barisdata['buktitransfer'];
echo "<img style=center src='".$gambar."' width=250px height=250px />";
?>