<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

include "../config/koneksi.php";

$data = mysqli_query($conn, "SELECT * FROM pasien");
?>

<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title>Data Pasien</title>

<style>

body{
    font-family:Segoe UI,sans-serif;
    background:#ecf0f5;
    margin:20px;
}

.header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
}

.btn{
    padding:10px 15px;
    color:white;
    text-decoration:none;
    border-radius:5px;
    margin-right:5px;
}

.btn-primary{
    background:#007bff;
}

.btn-success{
    background:#28a745;
}

.btn-danger{
    background:#dc3545;
}

.table-box{
    background:white;
    padding:20px;
    border-radius:8px;
}

.search-box{
    float:right;
    margin-bottom:15px;
}

.search-box input{
    padding:8px;
    width:250px;
}

table{
    width:100%;
    border-collapse:collapse;
}

table th{
    background:#007bff;
    color:white;
    padding:12px;
}

table td{
    padding:10px;
    border-bottom:1px solid #ddd;
}

table tr:hover{
    background:#f5f5f5;
}

.action a{
    text-decoration:none;
    padding:5px 10px;
    border-radius:4px;
    color:white;
}

.edit{
    background:#28a745;
}

.hapus{
    background:#dc3545;
}

.back{
    margin-top:20px;
    display:inline-block;
}

</style>

</head>
<body>

<div class="header">
    <h2>Data Pasien</h2>

```
<div>
    <a href="tambah_pasien.php" class="btn btn-primary">
        + Tambah Pasien
    </a>

    <a href="#" class="btn btn-success">
        Export Excel
    </a>
</div>
```

</div>

<div class="table-box">

```
<div class="search-box">
    <input
        type="text"
        id="cari"
        placeholder="Cari pasien...">
</div>

<table id="tabelPasien">

    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Keluhan</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

    <?php
    $no = 1;

    while($row = mysqli_fetch_assoc($data)){
    ?>

    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['umur']; ?></td>
        <td><?= $row['alamat']; ?></td>
        <td><?= $row['keluhan']; ?></td>

        <td class="action">

            <a
            href="edit_pasien.php?id=<?= $row['id']; ?>"
            class="edit">
            Edit
            </a>

            <a
            href="hapus_pasien.php?id=<?= $row['id']; ?>"
            class="hapus"
            onclick="return confirm('Yakin hapus data?')">
            Hapus
            </a>

        </td>

    </tr>

    <?php } ?>

    </tbody>

</table>
```

</div>

<br>

<a href="../dashboard.php" class="btn btn-primary back">
    Kembali ke Dashboard
</a>

<script>

document.getElementById("cari")
.addEventListener("keyup", function(){

let filter =
this.value.toLowerCase();

let rows =
document.querySelectorAll("#tabelPasien tbody tr");

rows.forEach(row => {

let text =
row.innerText.toLowerCase();

row.style.display =
text.includes(filter)
? ""
: "none";

});

});

</script>

</body>
</html>
