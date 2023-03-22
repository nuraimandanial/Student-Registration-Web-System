<html>
<head>
<title> Kemaskini Maklumat Putera </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #3399FF;
}
-->
</style></head>

<body>
<p><h3><center> Mengemaskinikan Maklumat Putera jika terdapat perubahan dalam data Putera. </center></h3></p>

<?php
$noP=$_GET['idPutera'];
$con = mysqli_connect ("localhost", "root", "");
if (!$con)
{
die('Sambungan kepada pangkalan gagal'.mysqli_connect_error());
}

mysqli_select_db ($con, "dbpendaftaranputera");
$sql = " select * from putera where idPutera='".$noP."' ";   // contohnya, $sql = " select * from putera where idPutera='M001' ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$namaPutera = htmlspecialchars ($row['namaPutera'], ENT_QUOTES); 			// ENT_QUOTES mesti dalam huruf besar
$jantina = $row['jantina'];


?>

<form align ="center" action ="prosesKemaskini.php" method ="POST">
<table align ="center">
<tr>
<td align ="right">ID Putera : </td>
<td align ="left"><b> <?php print $noP; ?> </b> <input type = "hidden" name ='idPutera' value ='<?php print $noP;?>'></td>
</tr>
 
<tr>
<td align ="right">Nama Putera : </td> 
<td><input name = "namaPutera" type="text" value='<?php print $namaPutera;?>'></td>
</tr>

<tr>
<td align ="right"> Jantina : </td>
<td><input name = "jantina" type="text" size = "1" value='<?php print $jantina; ?>'> </td>
</tr>

<tr>
<td> </td>
<td><input type="submit"  Value="Kemaskini"></td>
</tr>

</table>





</form>



</body>
</html>