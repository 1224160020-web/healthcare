<?php
include "../config/koneksi.php";

$pasien = mysqli_query($conn,"SELECT * FROM pasien ORDER BY nama ASC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah Pendaftaran</title>

<style>

body{
    background:#f4f6f9;
    font-family:Segoe UI;
}

.container{
    width:700px;
    margin:30px auto;
}

.card{
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 2px 10px rgba(0,0,0,.1);
}

h2{
    margin-bottom:20px;
}

.form-group{
    margin-bottom:15px;
}

label{
    display:block;
    margin-bottom:5px;
    font-weight:bold;
}

input,
select,
textarea{
    width:100%;
    padding:10px;
    border:1px solid #ddd;
    border-radius:5px;
}

.btn{
    background:#0073e6;
    color:white;
    border:none;
    padding:12px 20px;
    border-radius:5px;
    cursor:pointer;
}

#pasienBaru{
    display:none;
}

</style>
</head>
<body>

<div class="container">

<div class="card">

<h2>Tambah Pendaftaran Pasien</h2>

<form method="POST" action="simpan_pendaftaran.php">

<div class="form-group">

<label>Jenis Pasien</label>

<input type="radio"
name="jenis"
value="lama"
checked
onclick="pasienLama()">
Pasien Lama

<input type="radio"
name="jenis"
value="baru"
onclick="pasienBaru()">
Pasien Baru

</div>

<div id="pasienLama">

<div class="form-group">

<label>Nama Pasien</label>

<select name="pasien_id">

<option value="">
Pilih Pasien
</option>

<?php
while($row=mysqli_fetch_assoc($pasien)){
?>

<option value="<?= $row['id'] ?>">
<?= $row['nama'] ?>
</option>

<?php } ?>

</select>

</div>

</div>

<div id="pasienBaru">

<div class="form-group">
<label>Nama Pasien</label>
<input type="text" name="nama">
</div>

<div class="form-group">
<label>Umur</label>
<input type="number" name="umur">
</div>

<div class="form-group">
<label>Alamat</label>
<textarea name="alamat"></textarea>
</div>

</div>

<div class="form-group">
<label>Keluhan</label>
<textarea name="keluhan" required></textarea>
</div>

<button class="btn" type="submit">
Simpan Pendaftaran
</button>

</form>

</div>

</div>

<script>

function pasienBaru(){
    document.getElementById('pasienBaru').style.display='block';
    document.getElementById('pasienLama').style.display='none';
}

function pasienLama(){
    document.getElementById('pasienBaru').style.display='none';
    document.getElementById('pasienLama').style.display='block';
}

</script>

</body>
</html>