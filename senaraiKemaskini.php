<!--
Kod pembetulan untuk buku teks SK Tingkatan 5 (ms347) : Senarai.php
Oleh Husnil Khatimi

ps: ini hanya kod cadangan pembetulan. 
perubahan besar dibuat oleh guru.
-->
<html>
<head>
<title>Senarai Nama Putera</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #3399FF;
}
-->
</style></head>
<body>
<?php 
$con = mysqli_connect("localhost","root","");
if(!$con){
		die('Sambungan db gagal. '.mysqli_connect_error());
}
mysqli_select_db($con, "dbpendaftaranputera");

//data hasil ini akan digunakan untuk table di bawah
$hasil = mysqli_query($con, "SELECT * FROM putera");

?>

<h2><center>Senarai Maklumat Putera Untuk Dikemas Kini</center></h2>
<table align='center' border=1>
<tr bgcolor='#ACB233'>
	<th>ID Putera</th>
	<th>Nama Putera</th>
	<th>Jantina</th>
	
	<th>Tindakan</th>
</tr>
<?php 
while($putera = mysqli_fetch_array($hasil)){
	echo "<tr>";
	echo "<td align='center'>".$putera['idPutera']."</td>";
	echo "<td>".$putera['namaPutera']."</td>";
	echo "<td align='center'>".$putera['jantina']."</td>";
	
	echo "<td><a href='kemaskini.php?idPutera=".$putera['idPutera']."'>Kemaskini</a></td>";
	echo "</tr>";
}
?>
</table>

</body>
</html>