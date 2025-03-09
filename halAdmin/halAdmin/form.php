<?php
include 'config.php';

$nama = "";
$usia = "";
$email = "";
$id = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
    $nama = $row['nama'];
    $usia = $row['usia'];
    $email = $row['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengguna</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2><?= $id ? 'Edit Pengguna' : 'Tambah Pengguna' ?></h2>
    <form action="crud.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $nama ?>" required>
        <label>Usia:</label>
        <input type="number" name="usia" value="<?= $usia ?>" required>
        <label>Email:</label>
        <input type="email" name="email" value="<?= $email ?>" required>
        <button type="submit" name="<?= $id ? 'update' : 'create' ?>">
            <?= $id ? 'Update' : 'Tambah' ?>
        </button>
    </form>
    <a href="tables.php">⬅ Kembali</a>
</body>
</html>
