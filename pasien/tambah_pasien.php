<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pasien</title>

    <style>

    body{
        font-family:Segoe UI,sans-serif;
        background:#ecf0f5;
        padding:30px;
    }

    .container{
        background:white;
        max-width:600px;
        margin:auto;
        padding:25px;
        border-radius:10px;
        box-shadow:0 2px 10px rgba(0,0,0,0.1);
    }

    h2{
        margin-bottom:20px;
        color:#333;
    }

    label{
        display:block;
        margin-top:15px;
        margin-bottom:5px;
        font-weight:bold;
    }

    input,
    textarea{
        width:100%;
        padding:10px;
        border:1px solid #ccc;
        border-radius:5px;
    }

    textarea{
        height:100px;
    }

    .btn{
        background:#007bff;
        color:white;
        border:none;
        padding:12px 20px;
        margin-top:20px;
        border-radius:5px;
        cursor:pointer;
    }

    .btn:hover{
        background:#0056b3;
    }

    .back{
        display:inline-block;
        margin-top:15px;
        text-decoration:none;
    }

    </style>

</head>
<body>

<div class="container">

    <h2>Tambah Data Pasien</h2>

    <form method="POST" action="simpan_pasien.php">

        <label>Nama Pasien</label>
        <input type="text" name="nama" required>

        <label>Umur</label>
        <input type="number" name="umur" required>

        <label>Alamat</label>
        <textarea name="alamat" required></textarea>

        <label>Keluhan</label>
        <textarea name="keluhan" required></textarea>

        <button type="submit" class="btn">
            Simpan Data
        </button>

    </form>

    <br>

    <a href="pasien.php" class="back">
        ← Kembali ke Data Pasien
    </a>

</div>

</body>
</html>