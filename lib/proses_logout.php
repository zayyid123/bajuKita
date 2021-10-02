<?php

session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['nama_lengkap']);
unset($_SESSION['level']);

session_destroy();
session_start();
$_SESSION['username_user'] = '';
$_SESSION['level'] = 'none';
echo "<script>alert('Anda telah keluar dari halaman Administrator');document.location='../index.php'</script>";
