<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

include "config/koneksi.php";

$total_pasien = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM pasien"));
$total_dokter = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM dokter"));

$kunjungan_hari_ini = 0;

$cek = mysqli_query($conn,"SHOW TABLES LIKE 'pendaftaran'");
if(mysqli_num_rows($cek) > 0){
    $kunjungan_hari_ini = mysqli_num_rows(
        mysqli_query($conn,
        "SELECT * FROM pendaftaran WHERE tanggal = CURDATE()")
    );
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Dashboard Healthcare</title>

<style>

body{
    margin:0;
    font-family:Arial, sans-serif;
    background:#f4f6f9;
}

.sidebar{
    width:250px;
    height:100vh;
    background:#2f4050;
    position:fixed;
    overflow:auto;
}

.sidebar h2{
    color:white;
    text-align:center;
    padding:20px;
}

.sidebar a{
    display:block;
    color:white;
    text-decoration:none;
    padding:15px 20px;
    border-bottom:1px solid rgba(255,255,255,0.1);
}

.sidebar a:hover{
    background:#1f2d3d;
}

.main{
    margin-left:250px;
    padding:20px;
}

.header{
    background:#f1c40f;
    padding:15px;
    border-radius:8px;
    font-size:22px;
    font-weight:bold;
}

.cards{
    display:flex;
    gap:20px;
    margin-top:20px;
}

.card{
    flex:1;
    color:white;
    padding:20px;
    border-radius:10px;
}

.blue{
    background:#0073e6;
}

.green{
    background:#00a65a;
}

.red{
    background:#dd4b39;
}

.card h1{
    margin:0;
    font-size:40px;
}

.card p{
    margin-top:10px;
}

.box{
    background:white;
    padding:20px;
    margin-top:20px;
    border-radius:10px;
}

</style>
</head>
<body>

<div class="sidebar">

    <h2>HEALTHCARE</h2>

    <a href="dashboard.php">🏠 Dashboard</a>

    <a href="pasien/pasien.php">
        👨‍⚕️ Data Pasien
    </a>

    <a href="dokter/dokter.php">
        🩺 Data Dokter
    </a>

    <a href="pendaftaran/pendaftaran.php">
        📋 Pendaftaran
    </a>

    <a href="#">
        📄 Laporan Medis
    </a>

    <a href="logout.php">
        🚪 Logout
    </a>

</div>

<div class="main">

    <div class="header">
        Dashboard Monitoring Healthcare
    </div>

    <div class="cards">

        <div class="card blue">
            <h1><?= $total_pasien ?></h1>
            <p>Total Pasien</p>
        </div>

        <div class="card green">
            <h1><?= $total_dokter ?></h1>
            <p>Total Dokter</p>
        </div>

        <div class="card red">
            <h1><?= $kunjungan_hari_ini ?></h1>
            <p>Kunjungan Hari Ini</p>
        </div>

    </div>

    <div class="box">
        <h3>Informasi Sistem</h3>
        <hr>
        <br>
        <p>Selamat datang di Sistem Informasi Healthcare.</p>
        <p>Gunakan menu di sebelah kiri untuk mengelola data pasien, dokter, dan pendaftaran.</p>
    </div>

</div>

</body>
</html>