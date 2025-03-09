<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash password

    $query = "INSERT INTO login_users (email, password) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $email, $password);

    if ($stmt->execute()) {
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href='login.html';</script>";
    } else {
        echo "<script>alert('Registrasi gagal. Email mungkin sudah digunakan.'); window.location.href='register.html';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
