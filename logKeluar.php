<style type="text/css">
<!--
body {
	background-color: #3399FF;
}
-->
</style><?php

# proses log keluar
session_start();
if(session_destroy()) // menghentikan semua sesi log masuk
{
	header("location:myFrameMain.html");  // Melencong ke page utama
}
?>