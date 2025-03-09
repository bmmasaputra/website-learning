<?php
// Jika pengguna sudah login, arahkan ke beranda
if (isset($_SESSION['email'])) {
    header("Location: halAdmin/halAdmin/halaman.php");
    exit();
} else {
    // Jika belum login, arahkan ke halaman login
    header("Location: halAdmin/halAdmin/login.html");
    exit();
}
?>
