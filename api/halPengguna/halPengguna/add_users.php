<?php
include 'config.php';

$password = password_hash('password123', PASSWORD_DEFAULT); // Hash password

$query = "INSERT INTO login_users (email, password) VALUES ('admin@example.com', ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $password);

if ($stmt->execute()) {
    echo "User berhasil ditambahkan!";
} else {
    echo "Gagal menambahkan user: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
