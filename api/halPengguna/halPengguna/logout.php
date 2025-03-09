<?php
session_start();
session_destroy();
header("Location: login.html"); // Kembali ke halaman login setelah logout
exit();
?>
