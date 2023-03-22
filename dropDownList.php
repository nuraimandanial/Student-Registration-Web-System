<html>
<head>
<title>Paparan Nama Putera Mengikut Kelas  </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #3399FF;
}
-->
</style></head>

<body>
<?php
// connection perlu digunakan awal, kerana melibatkan penggunaan pernyatan SQL dalam form
include('connection.php');

// Menyediakan borang yang mengandungi drop down list
// <form name='senaraiNama' action='".$_SERVER['PHP_SELF']."' method='POST' target='_SELF'>.
// Apabila buang target='_SELF', ia balik ke page asal.

echo" 
<form name='senaraiNama' action='".$_SERVER['PHP_SELF']."' method='POST'> 
	<table width='30%' align='center' border='1'>
		<caption><h3>Sila pilih nama kelas untuk memaparkan nama Putera mengikut kelas.</h3></caption>
			<tr> 
			<td align='right' width='30%' bgcolor=#c4c4c4> Nama Kelas : </td>
			<td width='50%'>
				<select name='namaKelas' required>
				<option disabled selected value> Pilih </option>";
				
				// Pernyataan SQL untuk memilih semua medan yang terdapat dalam jadual Kelas
				$sqlselect=mysqli_query($con, "select* from kelas");
				
				// Memaparkan maklumat Putera ke dalam jadual secara ulangan 
				// selagi memenuhi syarat dalam arahan SQL, kali ini berlaku dalam tag <option>
				while($data=mysqli_fetch_array($sqlselect)) {
					echo"<option value='".$data['noKelas']."'>".$data['namaKelas']." </option>";
				}
				echo" </select>
				<input type='submit' value='Papar'>
			</td>
			</tr>
			
	</table>
</form>"; 

// apabila nilai POST dihantar ke fail yang sama, perlu ada pengujian kewujudan data post
// bagi mengelakkan berlakunya ralat kali pertama page dibuka.
if(!empty($_POST)) {
	
	// Mengambil nilai daripada data yang dipost
	$namaKelas=$_POST['namaKelas'];
	
	// Membuat pertanyaan untuk mendapatkan maklumat yng diperlukan
	$sqlpapar=mysqli_query($con, "select* from putera, kelas where putera.noKelas=kelas.noKelas
	AND putera.noKelas='".$namaKelas."' order by namaPutera ASC");
		
// Untuk memaparkan tajuk senarai nama, iaitu nama kelas.
echo"<center><h3> Senarai Nama Kelas : $namaKelas </h3></center>";
 



// Menyediakan header untuk table
echo"
<table width='60%' align='center' border='1'>
<tr align='center' bgcolor=#c4c4c4>
	<td>Bil</td>
	<td>Nama Putera</td>
	<td>Jantina</td>
	<td>Kelas</td>
</tr>";

$i=1;
// Memaparkan senarai nama Putera row demi row selagi syarat dalam $sqlpapar dipenuhi
		while($row=mysqli_fetch_array($sqlpapar)){
			echo"<tr>
			<td align='center'>".$i."</td>
			<td>".$row['namaPutera']."</td>
			<td align='center'>".$row['jantina']."</td>
			<td align='center'>".$row['namaKelas']."</td>
			</tr>";
			$i++;
			}
			echo "</table>";
}
?>
<br>
<br>
<center><a href="javascript:window.print()"> Cetak Laporan</a></center>


</body>
</html>


