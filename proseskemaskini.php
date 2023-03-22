<html>
<head>
<title> Proses Kemaskini </title>
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
if (!$con)
{
die('Sambungan kepada pangkalan gagal'.mysqli_connect_error());
}
mysqli_select_db ($con, "dbpendaftaranputera");
$idPutera = $_POST['idPutera'];
$namaPutera = $_POST['namaPutera'];
$jantina = $_POST['jantina'];

$sql = "update putera set namaPutera='$namaPutera', jantina='$jantina' where idPutera='$idPutera' ";
$result=mysqli_query($con, $sql);
header('location:senaraiKemaskini.php');


?>

</body>
</html>