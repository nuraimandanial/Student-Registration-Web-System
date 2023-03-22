<html>
<head>
<title> Import Data CSV </title>
</head>

<body>

<?php
// Membuat sambungan ke pangkalan data
	include('connection.php');
?>

<center><h2>Daftar Pengguna Baharu <br>Import Fail CSV</h2></center>
<br>
<!--Pilih lokasi bagi fail CSV -->
<fieldset>
<center>
<label>Pilih Lokasi Fail CSV : </label>
<form action="simpanCSV.php" method="post" name="uploadCSV" enctype="multipart/form-data" target='_SELF'> 
  <div align="center"></div>
  
   <div align="center"> 
           <input type="file" name="file" id="file" class="input-large">
      <br>
      </div>
    <button type="submit" id="submit" name="Import">Muat Naik</button>
</form>
</center>
</fieldset>


</body>
</html>


