<?php
// Jika pengguna sudah login, arahkan ke beranda
if (isset($_SESSION['email'])) {
    header("Location: halPengguna/halPengguna/index.php");
    exit();
} else {
    // Jika belum login, arahkan ke halaman login
    header("Location: halPengguna/halPengguna/login.html");
    exit();
}
?>
