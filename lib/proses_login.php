<!-- sweet alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

//panggil koneksi database
include "koneksi.php";

$username = mysqli_escape_string($koneksi, $_POST['user']);
$password = mysqli_escape_string($koneksi, $_POST['pass']);
$level = mysqli_escape_string($koneksi, $_POST['level']);

//cek username, terdaftar atau tidak
$cek_user = mysqli_query($koneksi, "SELECT * FROM user WHERE username_user = '$username' and level='$level' ");
$user_valid = mysqli_fetch_array($cek_user);
//uji jika username terdaftar
if ($user_valid) {
    //jika username terdaftar
    //cek password sesuai atau tidak
    if ($password == $user_valid['password_user']) {
        //jika password sesuai
        //buat session
        session_start();
        $_SESSION['username_user'] = $user_valid['username_user'];
        $_SESSION['level'] = $user_valid['level'];

        //uji level user
        if ($level == "admin") {
            header('location:../admin/dist/index_admin.php');
        } elseif ($level == "user") {
            header('location:../index.php');
        }
    } else {
        echo "<script>alert('Maaf, Login Gagal, Password anda tidak sesuai!');document.location='login.php'</script>";
    }
} else {
    echo "<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!');document.location='login.php'</script>";
}
