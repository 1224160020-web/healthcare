<?php
include "config/koneksi.php";
$data = mysqli_query($conn, "SELECT * FROM pasien");
?>

<a href="tambah_pasien.php">Tambah Pasien</a>

<table border="1">
<tr><th>Nama</th><th>Umur</th><th>Alamat</th><th>Aksi</th></tr>

<?php while ($row = mysqli_fetch_assoc($data)) { ?>
<tr>
<td><?= $row['nama'] ?></td>
<td><?= $row['umur'] ?></td>
<td><?= $row['alamat'] ?></td>
<td>
<a href="edit_pasien.php?id=<?= $row['id'] ?>">Edit</a>
<a href="hapus_pasien.php?id=<?= $row['id'] ?>">Hapus</a>
</td>
</tr>
<?php } ?>
</table>