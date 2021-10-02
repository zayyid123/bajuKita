<?php
	include '../../../../lib/koneksi.php';
	$id = $_GET['id'];
    //ubah
	mysqli_query($koneksi,"UPDATE pesanan SET status ='not approved' WHERE id_pesanan ='$id'");

    //pindah
    echo "<script>alert('berhasil menolak pesanan');document.location='../../index_admin.php?page=pesanan'</script>";
?>