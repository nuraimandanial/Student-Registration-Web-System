<style type="text/css">
<!--
body {
	background-color: #3399FF;
}
-->
</style>


<?PHP

//L1. mengambil data yang dihantar secara get pada link padam
$idPengguna=$_GET['idPengguna'];
//tamat bahagian 1


//L2. memanggil fail connectin
include('connection.php');

//L3 : melaksanakan arahan menghapuskan rekod
$sqlhapus=mysqli_query($con,"delete from pengguna where idPengguna='".$idPengguna."'");

//L4 : arahan untk memaparkan Popup dan kembali ke page senarai pengguna. 
echo"<script>alert('Rekod telah dihapuskan'); 
window.location.href='admin.php';
</script>";

?>