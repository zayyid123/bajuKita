<?php 
include '../../../../lib/koneksi.php';

//tangkap
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['pass'];

// update
mysqli_query($koneksi,"UPDATE user SET username_user = '$username', email_user = '$email', password_user = '$password' WHERE id_user = '$id'");

// mengalihkan
header("location:../../index_admin.php?page=datamitra");
?>