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
     include("peserta.main.php");
     }
     else
     {
     include("login.php");
     }
?>	