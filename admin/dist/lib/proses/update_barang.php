<?php 
include '../../../../lib/koneksi.php';

//tangkap 
$id = $_POST['id'];
$idkategori = $_POST['kategori'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

// tangkap gambar
$namaGambar = $_FILES['gambar']['name'];
$ukuranGambar = $_FILES['gambar']['size'];
$error = $_FILES['gambar']['error'];
$tmpGambar = $_FILES['gambar']['tmp_name'];

//cek gambar ada atau tidak
if ($error === 4) {
    // upload
    mysqli_query($koneksi,"UPDATE barang SET id_barang = '$id', id_kategori = '$idkategori', nama_brg = '$nama', harga_brg = '$harga', stok_brg = '$stok' WHERE id_barang = '$id'");

    // mengalihkan
    echo "<script>document.location='../../index_admin.php?page=databarang'</script>";
    die;
};

//cek apakah gambar ekstensi jpg jpeg atau lain
$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
$ekstensiGambar = explode('.' , $namaGambar);
$ekstensiGambar = strtolower(end($ekstensiGambar));

if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>alert('gambar yang anda masukkan bukan ekstensi jpg, jpeg atau png');document.location='../../index_admin.php?page=editbarang'</script>";
    die;
};

// cek ukuran gambar
if ($ukuranGambar > 2000000) {
    echo "<script>alert('gambar melebihi 2 mb');document.location='../../index_admin.php?page=editbarang'</script>";
    die;
};

//ganti nama gambar
$namaBaru = uniqid();
$namaBaru .= '.';
$namaBaru .= $ekstensiGambar;

// lolos upload
move_uploaded_file($tmpGambar, '../../../../assets/img/barang/' . $namaBaru);

// upload
mysqli_query($koneksi,"UPDATE barang SET id_barang = '$id', id_kategori = '$idkategori', nama_brg = '$nama', harga_brg = '$harga', stok_brg = '$stok', img_barang = '$namaBaru' WHERE id_barang = '$id'");

// mengalihkan
header("location:../../index_admin.php?page=databarang");
?>