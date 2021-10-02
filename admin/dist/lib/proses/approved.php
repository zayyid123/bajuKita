<?php
	include '../../../../lib/koneksi.php';
	$id = $_GET['id'];
    $idBrg = $_GET['idbrg'];
    //ambil data stok brg
    $stok = mysqli_query($koneksi,"SELECT stok_brg AS stok FROM barang WHERE id_barang = '$idBrg'");
    $dataStok = mysqli_fetch_array($stok);

    //ambil data total barang
    $totalBrg = mysqli_query($koneksi,"SELECT total_barang AS total FROM pesanan WHERE id_pesanan = '$id'");
    $dataTotalBrg = mysqli_fetch_array($totalBrg);

    //mengurangi stok
    $stokAfter = $dataStok['stok'] - $dataTotalBrg['total'];
    //ubah
	mysqli_query($koneksi,"UPDATE pesanan SET status ='approved' WHERE id_pesanan ='$id'");

    //ubah stok
    mysqli_query($koneksi,"UPDATE barang SET stok_brg ='$stokAfter' WHERE id_barang ='$idBrg'");

    //pindah
    echo "<script>alert('berhasil menyetujui pesanan');document.location='../../index_admin.php?page=pesanan'</script>";
?>