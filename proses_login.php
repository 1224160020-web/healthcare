<?php
session_start();
include "config/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
$data = mysqli_fetch_assoc($query);

if ($data && $password == $data['password']) {
    $_SESSION['login'] = true;
    header("Location: dashboard.php");
    exit;
} else {
    echo "Login gagal!";
}
?>