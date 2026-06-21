<?php

include "../config/koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM dokter WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Dokter</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<h2>Edit Dokter</h2>

<form action="update_dokter.php" method="POST">

    <input type="hidden" name="id" value="<?= $row['id']; ?>">

    <label>Nama Dokter</label>
    <input type="text" name="nama" value="<?= $row['nama']; ?>" required>

    <label>Spesialis</label>
    <input type="text" name="spesialis" value="<?= $row['spesialis']; ?>" required>

    <button type="submit">Update</button>

</form>

</body>
</html>