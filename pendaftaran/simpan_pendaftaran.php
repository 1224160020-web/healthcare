<?php

include "../config/koneksi.php";

$pasien_id = $_POST['pasien_id'];
$tanggal = $_POST['tanggal'];
$keluhan = $_POST['keluhan'];

mysqli_query(
    $conn,
    "INSERT INTO pendaftaran
    (pasien_id,tanggal,keluhan)
    VALUES
    ('$pasien_id','$tanggal','$keluhan')"
);

header("Location: pendaftaran.php");
exit;