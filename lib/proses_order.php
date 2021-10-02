<?php 
// koneksi
include "koneksi.php";

// sql harga barang
$hargabrg = mysqli_query($koneksi,"SELECT harga_brg AS harga FROM barang WHERE id_barang = '$_POST[id_barang]'");
$dataHarga = mysqli_fetch_array($hargabrg);

// tangkap
$idPesanan = $_POST['id_pesanan'];
$idUser = $_POST['id_user'];
$idBarang = $_POST['id_barang'];
$status = $_POST['status'];
$tanggal = $_POST['tanggal'];
$totalBarang = $_POST['total_barang'];
$totalTransaksi = $dataHarga['harga'] * $_POST['total_barang'];

// upload
mysqli_query($koneksi,"INSERT INTO pesanan VALUES ('$idPesanan', '$idUser', '$idBarang', '$totalBarang', '$tanggal', '$totalTransaksi', '$status')");

// mengalihkan
header("location:../index.php?page=pesananku");
?>