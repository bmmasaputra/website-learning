<?php
include 'config.php';

// CREATE
if (isset($_POST['create'])) {
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $email = $_POST['email'];
    $query = "INSERT INTO users (nama, usia, email) VALUES ('$nama', '$usia', '$email')";
    mysqli_query($conn, $query);
    header("Location: tables.php");
}

// READ
$result = mysqli_query($conn, "SELECT * FROM users");

// UPDATE
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $email = $_POST['email'];
    $query = "UPDATE users SET nama='$nama', usia='$usia', email='$email' WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: tables.php");
}

// DELETE
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM users WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: tables.php");
}
?>
