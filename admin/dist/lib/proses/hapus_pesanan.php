<?php 
include '../../../../lib/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM pesanan WHERE id_pesanan='$id'");

header("location:../../index_admin.php?page=pesanan");
?>