<style type="text/css">
<!--
body {
	background-color: #3399FF;
}
-->
</style><?php
session_start();

# mulakan sesi log masuk
if(!isset($_SESSION["namaPengguna"])){
	# jika belum log masuk, melencong ke fail ini
	header("Location:logMasuk.php");
	exit();
}
?>