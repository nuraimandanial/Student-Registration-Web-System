<?php
// Membuat sambungan ke pangkalan data
	include('connection.php');

if(isset($_POST["Import"])){
	$filename=$_FILES["file"]["tmp_name"];
	if($_FILES["file"]["size"] > 0)
	{
		$file = fopen($filename, "r");
		while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
		{
			// Tindakan ini akan memasukkan fail CSV ke dalam pangkalan data
			$save = "insert into pengguna (idPengguna, namaPengguna, kataLaluan, jenisPengguna)
		values ('".$getData[0]."', '".$getData[1]."', '".$getData[2]."', '".$getData[3]."')";
		
		$result = mysqli_query($con,$save);
		if (!isset($result))
		{
			echo "<script type=\"text/javascript\">
			alert(\"Ralat pada format fail: Sila muat naik fail berformat csv sahaja.\");
			window.location = \"tambahCSV.php\"
			</script>";
		}
		else {
			echo 
			"<script type=\"text/javascript\">
			alert(\"Fail CSV telah berjaya diimport.\");
			 </script>";
		}
		}
		fclose($file);
	}
}
?>