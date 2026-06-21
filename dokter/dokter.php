<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

include "../config/koneksi.php";

$data = mysqli_query($conn, "SELECT * FROM dokter");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Data Dokter</title>

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

.table-box{
    background:white;
    padding:20px;
    border-radius:8px;
    box-shadow:0 2px 8px rgba(0,0,0,0.1);
}

.search-box{
    float:right;
    margin-bottom:15px;
}

.search-box input{
    padding:8px;
    width:250px;
    border:1px solid #ccc;
    border-radius:4px;
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
    background:#f8f9fa;
}

.action a{
    text-decoration:none;
    padding:6px 10px;
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
    <h2>Data Dokter</h2>

    <div>
        <a href="tambah_dokter.php" class="btn btn-primary">
            + Tambah Dokter
        </a>

        <a href="#" class="btn btn-success">
            Export Excel
        </a>
    </div>
</div>

<div class="table-box">

    <div class="search-box">
        <input
            type="text"
            id="cari"
            placeholder="Cari dokter...">
    </div>

    <table id="tabelDokter">

        <thead>
            <tr>
                <th>No</th>
                <th>Nama Dokter</th>
                <th>Spesialis</th>
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
            <td><?= $row['spesialis']; ?></td>

            <td class="action">

                <a
                href="edit_dokter.php?id=<?= $row['id']; ?>"
                class="edit">
                Edit
                </a>

                <a
                href="hapus_dokter.php?id=<?= $row['id']; ?>"
                class="hapus"
                onclick="return confirm('Yakin ingin menghapus?')">
                Hapus
                </a>

            </td>

        </tr>

        <?php } ?>

        </tbody>

    </table>

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
document.querySelectorAll("#tabelDokter tbody tr");

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