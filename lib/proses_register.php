<?php 
// koneksi
include "koneksi.php";

// tangkap
$id = "";
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['pass'];
$level = "user";

// upload
mysqli_query($koneksi,"INSERT INTO user VALUES ('$id', '$username', '$email', '$password', '$level')");

// mengalihkan
echo "<script>alert('register berhasil, silahkan login');document.location='login.php'</script>";
?>