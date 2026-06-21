<?php
include "config/koneksi.php";
mysqli_query($conn, "DELETE FROM pasien WHERE id=$_GET[id]");
header("Location: pasien.php");
?>
