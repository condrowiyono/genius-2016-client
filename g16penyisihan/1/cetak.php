<?php
// mulai php nya dan matikan notif error
error_reporting(0);

//untuk menentukan kita di halaman berapa
$page = $_GET['page'] ;

//membutuhkan koneksi 
require("../../set.koneksi.php");

$query2 = "select * from tbsoal ORDER BY indeks ASC";

//dapat kan hasil dari query
$hasil2 = mysqli_query($link, $query2) or die("Kesalahan pada tabel soal");
while ($row = mysqli_fetch_array($hasil2))
	{
?>
		
		<div class="section group" id="<?php echo $row['indeks']; ?>">

			<table>
			<tr>
				<td valign="top">
				<?php echo $row['indeks'].".";?>
				</td>
				<td>
					<?php echo $row['pertanyaan']?>
				</td>
			</tr>
			</table>
		</div>
		<!--AKHIR PERNYATAAN -->
<?php 
	} 
?>