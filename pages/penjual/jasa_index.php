<?php
require_once '../../config/koneksi.php';

/*
sementara seller_id = 1
nanti diganti session login
*/

$seller_id = 1;

$query = mysqli_query($conn,"
    SELECT *
    FROM services
    WHERE seller_id='$seller_id'
    ORDER BY id DESC
");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jasa Saya</title>

<style>

body{
    font-family:Arial, sans-serif;
    margin:20px;
}

table{
    width:100%;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid #ccc;
}

th{
    background:#f4f4f4;
}

th,td{
    padding:10px;
    text-align:center;
}

.btn{
    padding:8px 12px;
    text-decoration:none;
    color:white;
    border-radius:5px;
}

.tambah{
    background:#27ae60;
}

.edit{
    background:#3498db;
}

.hapus{
    background:#e74c3c;
}

.kembali{
    background:#555;
}

</style>

</head>
<body>

<h2>Jasa Saya</h2>

<a href="jasa_tambah.php" class="btn tambah">
    + Tambah Jasa
</a>

<br><br>

<table>

<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Harga</th>
    <th>Aksi</th>
</tr>

<?php

$no = 1;

if(mysqli_num_rows($query) > 0){

    while($data = mysqli_fetch_assoc($query)){
?>

<tr>

    <td><?= $no++; ?></td>

    <td><?= $data['judul']; ?></td>

    <td>
        Rp <?= number_format($data['harga'],0,',','.'); ?>
    </td>

    <td>

        <a
            href="jasa_edit.php?id=<?= $data['id']; ?>"
            class="btn edit">
            Edit
        </a>

        <a
            href="jasa_hapus.php?id=<?= $data['id']; ?>"
            class="btn hapus"
            onclick="return confirm('Hapus jasa ini?')">
            Hapus
        </a>

    </td>

</tr>

<?php
    }

}else{
?>

<tr>
    <td colspan="4">
        Belum ada jasa
    </td>
</tr>

<?php } ?>

</table>

<br>

<a href="index.php" class="btn kembali">
    Kembali Dashboard
</a>

</body>
</html>