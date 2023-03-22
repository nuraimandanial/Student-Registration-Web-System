<html>
<head>
<title>Borang Maklumat Guru dan Kelas  </title>
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
<caption><h2><center> Borang Pendaftaran Guru Kelas dan Kelas Baharu </center></h2></caption>
<br>



<?php
// Menyediakan borang
// Laman web ini mengandungi dua table
// Borang pertama Borang Guru.  target='_SELF'
echo"
<form name='daftarGuruDanKelas' action='daftarGuruDanKelas.php' method='POST'>
<table align='center'>  
	<caption>Sila isi semua maklumat guru baharu:</caption>
	<tr>
		<td align='right' bgcolor='#c4c4c4'> ID Guru</td>
		<td><input type='text' name='idGuru' required></td>
	</tr>
	
	<tr>
		<td align='right' bgcolor='#c4c4c4'> Nama Guru :</td>
		<td><input type='text' name='namaGuru' required></td>
	</tr>
	
	<tr>
		<td align='right' bgcolor='#c4c4c4'> Guru Kelas :</td>
		<td><input type='text' name='guruKelas' required></td>
	</tr>
	
</table>

<br>
<br>

<table align='center'>
	<caption>Sila isi semua maklumat kelas baharu:</caption>
	<tr>
		<td align='right' bgcolor='#c4c4c4'> No. Kelas</td>
		<td><input type='text' name='noKelas' required></td>
	</tr>
	
	<tr>
		<td align='right' bgcolor='#c4c4c4'> Nama Kelas :</td>
		<td><input type='text' name='namaKelas' required></td>
	</tr>
	
	<tr>
		<td align='right' bgcolor='#c4c4c4'> Lokasi :</td>
		<td><input type='text' name='lokasi' required></td>
	</tr>
	
	<tr>
		<td align='right' bgcolor='#c4c4c4'> Bil Meja :</td>
		<td><input type='text' name='bilMeja' required></td>
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

// Menguji Had Atas dan Had Bawah
// Kod ini dikeluarkan buat sementara sahaja: $bilMeja=$_POST['bilMeja']; 
$bilMeja= filter_input (INPUT_POST, 'bilMeja');
if (empty($bilMeja)){
	echo"<script>alert('Bilangan Meja adalah medan wajib diisi.')</script>"; 
	exit();
}else if (!is_numeric($bilMeja)){
		echo"<script>alert('Bilangan meja mestilah integer positif.')</script>";
		exit();
}else if ($bilMeja < 0){
	echo"<script>alert('Bilangan meja mestilah lebih daripada sifar.')</script>";
	exit();
}else if ($bilMeja >= 30){
	echo"<script>alert('Bilangan meja mestilah tidak melebihi 30.')</script>";
	exit();
}




// data yang dipost ke dalam page yang sama perlu disemak kewujudannya
// terlebih dahulu, proses ini adalah bagi mengelakkan drpd berlakunya ralat
//apabila page ini dibuka buat kali pertama.
if (!empty($_POST)){
	// mengambil data yang dipost, untuk borang pertama
	$idGuru=$_POST['idGuru'];
	$namaGuru=$_POST['namaGuru'];
	$guruKelas=$_POST['guruKelas'];
		
	// Untuk borang kedua
	$noKelas=$_POST['noKelas'];
	$namaKelas=$_POST['namaKelas'];
	$lokasi=$_POST['lokasi'];
	$bilMeja=$_POST['bilMeja'];
	
	// Membuat sambungan ke pangkalan data
	include('connection.php');
	
	
	// Untuk memasukkan data ke dalam pangkalan data
	$sqlinsert=mysqli_query($con, "insert into guru (idGuru, namaGuru, guruKelas)
	values('".$idGuru."', '".$namaGuru."', '".$guruKelas."')
	");
	
	
	// Untuk memasukkan data ke dalam pangkalan data, borang kedua.
	$sqlinsert=mysqli_query($con, "insert into kelas (noKelas, namaKelas, lokasi, bilMeja)
	values('".$noKelas."', '".$namaKelas."', '".$lokasi."', '".$bilMeja."')
	");
	
	// Untuk memaklumkan kepada pengguna bahawa data berjaya disimpan.
	echo"<script>alert('Data berjaya disimpan.')</script>";
}

?>


</body>
</html>


