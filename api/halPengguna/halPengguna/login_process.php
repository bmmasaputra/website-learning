<?php
require 'config.php';
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM login_users 
            WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: index.php");
} else {
    echo "<center><h1>Email atau password salah. Silahkan coba login kembali.</h1>
    <button><strong><a href= 'index.php'>Login</a></strong></button></center>";
}




