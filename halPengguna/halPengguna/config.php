<?php
$host = "localhost"; // Sesuaikan dengan server database Anda
$user = "root"; // Username phpMyAdmin Anda
$pass = ""; // Password phpMyAdmin Anda (biarkan kosong jika default)
$dbname = "learning"; // Sesuaikan dengan nama database Anda

$conn = mysqli_connect($host, $user, $pass, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
