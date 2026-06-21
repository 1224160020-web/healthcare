<?php

include "../config/koneksi.php";

$nama = $_POST['nama'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$keluhan = $_POST['keluhan'];

mysqli_query(
    $conn,
    "INSERT INTO pasien(nama,umur,alamat,keluhan)
     VALUES('$nama','$umur','$alamat','$keluhan')"
);

header("Location: pasien.php");
exit;

?>