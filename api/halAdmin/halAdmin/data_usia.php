<?php
include 'config.php'; // Pastikan koneksi ke database sudah benar

$query = "SELECT usia, COUNT(*) AS jumlah FROM users GROUP BY usia ORDER BY usia";
$result = mysqli_query($conn, $query);

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);
?>
