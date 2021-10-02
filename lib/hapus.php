<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM pesanan WHERE id_pesanan='$id'");

header("location:../index.php?page=pesananku");
?>