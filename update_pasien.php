<?php
include "config/koneksi.php";

mysqli_query($conn, "UPDATE pasien SET 
nama='$_POST[nama]',
umur='$_POST[umur]',
alamat='$_POST[alamat]'
WHERE id='$_POST[id]'
");

header("Location: pasien.php");
?>