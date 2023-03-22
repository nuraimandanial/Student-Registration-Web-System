<html>
<head>
<title> Log Masuk </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #3399FF;
}
-->
</style></head>

<body>
<?php
// Untuk proses memulakan session dan juga proses log keluar
// Suatu kod tambahan
session_start(); 
$_SESSION['namaPengguna'] = 0;



$nama = $_POST['namaPengguna'];
$kataLaluan = $_POST['kataLaluan'];
$jumpa = False;
$con = mysqli_connect("localhost", "root", "", "dbpendaftaranputera");
if (!$con)
{
die('Sambungan kepada pangkalan gagal'.mysqli_connect_error());
}

mysqli_select_db ($con, "dbpendaftaranputera");
$hasil = mysqli_query($con, "select * from pengguna where namaPengguna = '$nama' and kataLaluan = '$kataLaluan'");
$bil_baris = mysqli_num_rows($hasil);

if ($bil_baris>0)
{
	$row = mysqli_fetch_array($hasil);
	$jenisPengguna = $row["jenisPengguna"];
	if ($jenisPengguna == 'admin')
	{
	header('location:myFrameAdmin.html');
	}
	else if ($jenisPengguna == 'guru')
	{
	header('location:myFrameGuru.html');  // header('location:pengguna.php?namaPengguna='.$nama); sebelum dan selepas tanda '=', tiada spacing.
	}
	else
	{
	header('location:myFrameIbubapaDanPutera.html');
	}
		
}
else
{
	print "<p>Nama pengguna atau kata laluan salah.</p>";
}

?>

</body>
</html>


