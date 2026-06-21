<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

include "../config/koneksi.php";

$data = mysqli_query($conn,"
SELECT
    pendaftaran.id,
    pasien.nama,
    pendaftaran.tanggal,
    pendaftaran.keluhan
FROM pendaftaran
JOIN pasien
ON pendaftaran.pasien_id = pasien.id
ORDER BY pendaftaran.id DESC
");
?>

<!DOCTYPE html>
<html>
<head>
<title>Laporan Medis</title>

<style>

body{
    font-family:Segoe UI;
    background:#f4f6f9;
    padding:20px;
}

.box{
    background:white;
    padding:20px;
    border-radius:10px;
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#0073e6;
    color:white;
    padding:12px;
}

td{
    padding:10px;
    border-bottom:1px solid #ddd;
}

.btn{
    background:#0073e6;
    color:white;
    padding:10px 15px;
    text-decoration:none;
    border-radius:5px;
}

</style>
</head>
<body>

<h2>Laporan Medis Pasien</h2>

<div class="box">

<table>

<tr>
    <th>No</th>
    <th>Nama Pasien</th>
    <th>Tanggal</th>
    <th>Keluhan</th>
</tr>

<?php
$no = 1;

while($row = mysqli_fetch_assoc($data)){
?>

<tr>
    <td><?= $no++ ?></td>
    <td><?= $row['nama'] ?></td>
    <td><?= $row['tanggal'] ?></td>
    <td><?= $row['keluhan'] ?></td>
</tr>

<?php } ?>

</table>

</div>

<br>

<a href="../dashboard.php" class="btn">
Kembali ke Dashboard
</a>

</body>
</html>