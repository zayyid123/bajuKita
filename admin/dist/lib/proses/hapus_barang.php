<?php 
include '../../../../lib/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM barang WHERE id_barang='$id'");

header("location:../../index_admin.php?page=databarang");
?>