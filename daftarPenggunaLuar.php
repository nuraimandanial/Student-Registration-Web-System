<html>
<head>
<title>Borang Daftar Pengguna Luar  </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #3399ff;
}
-->
</style></head>

<body>
<br>
<caption><h2><center> Borang Pendaftaran Pengguna Baru </center></h2></caption>

<caption><h4><center> Perhatian: Bagi mendaftar sebagai pengguna, anda mesti mengisi ID Pengguna. </center></h4></caption>
<caption><h4><center> Contoh: P001 hingga P999. </center></h4></caption>


<?php
// Menyediakan borang pendaftaran untuk ibubapa dan Putera

echo"
<form name='daftarPengguna' action='daftarPenggunaLuar.php' method='POST' target='_SELF'>
<table align='center'>
	<caption>Sila isi semua maklumat pengguna berikut.</caption>
	<tr>
		<td align='right' bgcolor='#c4c4c4'> ID Pengguna</td>
		<td><input type='text' name='idPengguna' required></td>
	</tr>
	
	<tr>
		<td align='right' bgcolor='#c4c4c4'> Nama Pengguna :</td>
		<td><input type='text' name='namaPengguna' required></td>
	</tr>
	
	<tr>
		<td align='right' bgcolor='#c4c4c4'> Kata Laluan :</td>
		<td><input type='text' name='kataLaluan' required></td>
	</tr>
	
	<tr>
		<td align='right' bgcolor='#c4c4c4'> Jenis Pengguna :</td>
		
		<td>
		<select name = 'jenisPengguna' required>
		<option disabled selected value>Pilih</option>
		<option value = 'ibubapa'> Ibu Bapa </option>
		<option value = 'putera'> Putera </option>
		</td>
	</tr>
	
	<tr>
		<td > </td>
		<td>
			<input type='submit' value='Daftar Pengguna'>
			<input type='reset' value='Reset'>
		</td>
	</tr>
	
</table>
</form>";

// data yang dipost ke dalam page yang sama perlu disemak kewujudannya
// terlebih dahulu, proses ini adalah bagi mengelakkan drpd berlakunya ralat
//apabila page ini dibuka buat kali pertama.
if (!empty($_POST)){
	// mengambil data yang dipost
	$idPengguna=$_POST['idPengguna'];
	$namaPengguna=$_POST['namaPengguna'];
	$kataLaluan=$_POST['kataLaluan'];
	$jenisPengguna=$_POST['jenisPengguna'];
	
	
	// Membuat sambungan ke pangkalan data
	include('connection.php');
	
	
	// Untuk memasukkan data ke dalam pangkalan data
	$sqlinsert=mysqli_query($con, "insert into pengguna (idPengguna, namaPengguna, kataLaluan, jenisPengguna)
	values('".$idPengguna."', '".$namaPengguna."', '".$kataLaluan."', '".$jenisPengguna."')
	");
	
	// Untuk memaklumkan kepada pengguna bahawa data berjaya disimpan.
	echo"<script>alert('Pendaftaran anda berjaya!')</script>";
}


?>

<!-- link untuk kembali ke page asal -->
<center><h4><a href ='logKeluar.php' target="_top"> Log Keluar</a></h4></center>



</body>
</html>


