<?php
include "config/koneksi.php";
$data = mysqli_query($conn, "SELECT * FROM dokter");
?>

<h2>Data Dokter</h2>

<a href="tambah_dokter.php">+ Tambah Dokter</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>Nama</th>
        <th>Spesialis</th>
        <th>Aksi</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($data)) { ?>
    <tr>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['spesialis'] ?></td>
        <td>
            <a href="edit_dokter.php?id=<?= $row['id'] ?>">Edit</a>
            <a href="hapus_dokter.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>