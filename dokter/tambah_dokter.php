<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Dokter</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<h2>Tambah Dokter</h2>

<form action="simpan_dokter.php" method="POST">

    <label>Nama Dokter</label>
    <input type="text" name="nama" required>

    <label>Spesialis</label>
    <input type="text" name="spesialis" required>

    <button type="submit">Simpan</button>

</form>

<br>
<a href="dokter.php">Kembali</a>

</body>
</html>