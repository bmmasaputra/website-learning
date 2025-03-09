<?php
require 'config.php';
session_start();
$email = $_POST["email"];
$_SESSION["email"] = $email;
$password = $_POST["password"];

$query_sql = "SELECT * FROM login_admin 
            WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: halaman.php");
} else {
    echo "<center><h1>Email atau password salah. Silahkan coba login kembali.</h1>
    <button><strong><a href= 'login.html'>Login</a></strong></button></center>";
}


