<html>
<head> 
<title> Log Masuk </title>  
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #66FFFF;
	background-image: url(backgroundRmC.jpg);
	background-repeat: repeat-x;
}
.style1 {color: #0000A0}
-->
</style></head>

<body>
<!-- Ini merupakan borang untuk pengguna log masuk ke dalam pangkalan data -->
<h1><center> 
  <p>&nbsp;</p>
  <p class="style1">Log Masuk Pengguna</p>
</center> 
</h1>
<form action = "jenisPengguna.php" method="POST">
<table align='center'>
	<tr>
	<td> Nama Pengguna </td>
	<td> <input name='namaPengguna' type="text" size="15"></td>
	</tr>

	<tr>
	<td> Kata Laluan </td>
	<td> <input name='kataLaluan' type="password" size="15"></td>
	</tr>

	<tr>
	<td> <input type ='submit' name='Submit' value='Masuk'></td>
	</tr>


</table>
</form>	
<center><h4><a href ='daftarPenggunaLuar.php'>Klik untuk Daftar Pengguna Baharu</a></h4></center>
<center>Ibu bapa atau putera dibenarkan mendaftar sebagai pengguna baharu </center>
<center> untuk mengisi maklumat ke dalam sistem ini.</center>
</body>
</html>