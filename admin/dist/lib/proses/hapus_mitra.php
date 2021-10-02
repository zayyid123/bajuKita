<?php 
include '../../../../lib/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM user WHERE id_user='$id'");

header("location:../../index_admin.php?page=datamitra");
?>