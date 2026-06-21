<?php
include "config/koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM pasien WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>

<form method="POST" action="update_pasien.php">
<input type="hidden" name="id" value="<?= $row['id'] ?>">
<input name="nama" value="<?= $row['nama'] ?>">
<input name="umur" value="<?= $row['umur'] ?>">
<textarea name="alamat"><?= $row['alamat'] ?></textarea>
<button>Update</button>
</form>