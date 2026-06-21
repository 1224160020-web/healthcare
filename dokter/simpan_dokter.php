<?php

include "../config/koneksi.php";

$nama = $_POST['nama'];
$spesialis = $_POST['spesialis'];

mysqli_query($conn,"
INSERT INTO dokter(nama,spesialis)
VALUES('$nama','$spesialis')
");

header("Location: dokter.php");
exit;

?>