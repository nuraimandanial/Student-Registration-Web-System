<html>
<head>
<title> Papar Maklumat Putera </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #3399ff;
}
-->
</style></head>

<body>
<p><h1><center> Senarai Nama Putera Dalam Tingkatan Empat </center></h1></p>
<p><h3><center> (mengikut susunan kelas) </center></h3></p>
<?php
// menyediakan header jadual yang ingin dipaparkan
echo " 
<table width='60%' align='center' border='1'>
	<tr bgcolor='#ACB233'> 
		<th>Bil</th>
		<th>Nama Putera</th>
		<th>Jantina</th>
		<th>Kelas </th>
		<th>Bil Meja </th>
	</tr>
";

// Membuat sambungan ke pangkalan data
include('connection.php');

// Menggunakan pernyataan SQL untuk memaparkan maklumat drpd beberapa jadual
$sqlpapar=mysqli_query($con, "select* from putera, kelas where putera.noKelas=kelas.noKelas order by kelas.namaKelas ASC");

// untuk menjana bilangan dalam jadual
$bil=1;

// Memaparkan maklumat murid ke dalam jadual secara ulangan selagi memenuhi syarat dalam arahan SQL
while ($datayangdiambil=mysqli_fetch_array($sqlpapar)){
	echo "
	<tr > 
	<td align='center'>".$bil."</td>
	<td>".$datayangdiambil['namaPutera']."</td>
	<td align='center'>".$datayangdiambil['jantina']."</td>
	<td align='center'>".$datayangdiambil['namaKelas']."</td>
	<td align='center'>".$datayangdiambil['bilMeja']."</td>
	</tr>
	";
	$bil++;
}
echo "</table>";
?>

</body>
</html>


