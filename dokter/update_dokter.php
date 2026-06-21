<?php

include "../config/koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$spesialis = $_POST['spesialis'];

mysqli_query($conn,"
UPDATE dokter
SET
nama='$nama',
spesialis='$spesialis'
WHERE id='$id'
");

header("Location: dokter.php");
exit;

?>