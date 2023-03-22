<!--
Kod pembetulan untuk buku teks SK Tingkatan 5 (ms350) : pengguna.php
Oleh Husnil Khatimi

ps: ini hanya kod cadangan pembetulan. 
perubahan bebas dibuat oleh guru.
-->
<html>
<head>
<title>Maklumat Pengguna</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #3399FF;
}
-->
</style></head>
<body>
<?php 
if(isset($_GET['namaPengguna'])){
	echo "<h1>Pengguna Sistem :".$_GET['namaPengguna']."</h1>";
}
?>

</body>
</html>