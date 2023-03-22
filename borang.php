<html>
<head>
<title>Borang Maklumat  </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #3399FF;
	background-image: url(Alien_Ink_2560X1600_Abstract_Background_1.jpg);
}
-->
</style></head>

<body>
<caption><h2><center> Borang Pendaftaran Kemasukan Putera Baru </center></h2></caption>
<br>



<?php
// Menyediakan borang
// Laman web ini mengandungi dua table
echo"
<form name='borang' action='borang.php' method='POST' target='_SELF'>
<table align='center'>  
	<caption>Sila isi semua maklumat Putera:</caption>
	<tr>
		<td align='right' bgcolor='#c4c4c4'> ID Putera</td>
		<td><input type='text' name='idPutera' required></td>
	</tr>
	
	<tr>
		<td align='right' bgcolor='#c4c4c4'> Nama Putera :</td>
		<td><input type='text' name='namaPutera' required></td>
	</tr>
	
	<tr>
		<td align='right' bgcolor='#c4c4c4'> Jantina :</td>
		<td>
		<select name='jantina' required>
		<option disabled selected value>Pilih</option>
		<option value='L'>L</option>
		<option value='P'>P</option>
		</select>
		</td>
	</tr>
	
	<tr>
		<td align='right' bgcolor='#c4c4c4'> No. Kelas :</td>
		<td><input type='text' name='noKelas' required></td>
	</tr>
	
	<tr>
		<td align='right' bgcolor='#c4c4c4'> ID Guru :</td>
		<td><input type='text' name='idGuru' required></td>
	</tr>
	
	<tr>
		<td align='right' bgcolor='#c4c4c4'> ID Ibu Bapa :</td>
		<td><input type='text' name='idIbuBapa' required></td>
	</tr>
</table>

<br>
<br>

<table align='center'>
	<caption>Sila isi semua maklumat ibu bapa:</caption>
	<tr>
		<td align='right' bgcolor='#c4c4c4'> ID Ibu Bapa</td>
		<td><input type='text' name='idIbuBapa' required></td>
	</tr>
	
	<tr>
		<td align='right' bgcolor='#c4c4c4'> Nama Bapa :</td>
		<td><input type='text' name='namaBapa' required></td>
	</tr>
	
	<tr>
		<td align='right' bgcolor='#c4c4c4'> Nama Ibu :</td>
		<td><input type='text' name='namaIbu' required></td>
	</tr>
	
	<tr>
		<td > </td>
		<td>
			<input type='submit' value='Input'>
			<input type='reset' value='Reset'>
		</td>
	</tr>
	
</table>

</form>";





// data yang dipost ke dalam page yang sama perlu disemak kewujudannya
// terlebih dahulu, proses ini adalah bagi mengelkkan drpd berlakunya ralat
//apabila page ini dibuka buat kali pertama.
if (!empty($_POST)){
	// mengambil data yang dipost, untuk borang pertama
	$idPutera=$_POST['idPutera'];
	$namaPutera=$_POST['namaPutera'];
	$jantina=$_POST['jantina'];
	$noKelas=$_POST['noKelas'];
	$idGuru=$_POST['idGuru'];
	$idIbuBapa=$_POST['idIbuBapa'];
	// Untuk borang kedua
	$idIbuBapa=$_POST['idIbuBapa'];
	$namaBapa=$_POST['namaBapa'];
	$namaIbu=$_POST['namaIbu'];
	
	
	// Membuat sambungan ke pangkalan data
	include('connection.php');
	
	
	// Untuk memasukkan data ke dalam pangkalan data
	$sqlinsert=mysqli_query($con, "insert into putera (idPutera, namaPutera, jantina, noKelas, idGuru, idIbuBapa)
	values('".$idPutera."', '".$namaPutera."', '".$jantina."', '".$noKelas."', '".$idGuru."', '".$idIbuBapa."')
	");
	
	
	// Untuk memasukkan data ke dalam pangkalan data, borang kedua.
	$sqlinsert=mysqli_query($con, "insert into ibubapa (idIbuBapa, namaBapa, namaIbu)
	values('".$idIbuBapa."', '".$namaBapa."', '".$namaIbu."')
	");
	
	// Untuk memaklumkan kepada pengguna bahawa data berjaya disimpan.
	echo"<script>alert('Data telah disimpan.')</script>";
}

?>
<!-- link untuk kembali ke page asal -->
<center><h4><a href ='logKeluar.php' target="_top"> Log Keluar</a></h4></center>

</body>
</html>


