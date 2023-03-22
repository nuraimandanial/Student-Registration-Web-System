<html>
<head>
<title> Maklumat Pengguna Sistem </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #3399FF;
	background-image: url(Alien_Ink_2560X1600_Abstract_Background_1.jpg);
}
-->
</style></head>

<body>
<br>

<p><center><a href ='daftarPengguna.php'>Daftar Pengguna Sistem Baharu</a></center></p>

<p><center><h2>Senarai Nama dan Maklumat Pengguna Sistem</h2></center></p>

<?php
$con = mysqli_connect("localhost", "root", "");
if (!$con)
{
	die('Sambungan kepada pangkalan gagal'.mysqli_connect_error());
}

mysqli_select_db ($con, "dbpendaftaranputera");

print "<table align='center' border='1'>";
print "<tr>";
print "<th>Nama Pengguna</th>";
print "<th>Kata Laluan</th>";
print "<th>Jenis Pengguna</th>";
print "<th>Tindakan</th>";
print "</tr>";

$result = mysqli_query($con,"select * from pengguna");
while ($row = mysqli_fetch_array($result))
{
	$idPengguna = $row ['idPengguna'];
	$namaPengguna = $row['namaPengguna'];
	$kataLaluan = $row['kataLaluan'];
	$jenisPengguna = $row['jenisPengguna'];
	$lnk = "<a href = 'padam.php?idPengguna=$idPengguna'>Hapus Rekod</a>";
	
	print "<tr>";
	print "<td>".$namaPengguna."</td>";
	print "<td>".$kataLaluan."</td>";
	print "<td>".$jenisPengguna."</td>";
	print "<td>".$lnk."</td>";
	print "</tr>";
}

print "</table>";
?>

</body>
</html>




