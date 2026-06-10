<?php
require_once '../../config/koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM categories ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Kategori</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2{
            margin-bottom: 20px;
        }

        .btn{
            display: inline-block;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
        }

        .btn-tambah{
            background-color: #27ae60;
        }

        .btn-edit{
            background-color: #3498db;
        }

        .btn-hapus{
            background-color: #e74c3c;
        }

        .btn-kembali{
            background-color: #555;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td{
            border: 1px solid #ccc;
        }

        th, td{
            padding: 10px;
            text-align: center;
        }

        th{
            background-color: #f4f4f4;
        }

        .aksi a{
            margin: 0 3px;
        }
    </style>
</head>
<body>

<h2>Data Kategori</h2>

<a href="kategori_tambah.php" class="btn btn-tambah">
    + Tambah Kategori
</a>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

    <?php
    $no = 1;

    if(mysqli_num_rows($query) > 0){

        while($data = mysqli_fetch_assoc($query)){
    ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['id']; ?></td>
            <td><?= $data['nama_kategori']; ?></td>

            <td class="aksi">

                <a
                    href="kategori_edit.php?id=<?= $data['id']; ?>"
                    class="btn btn-edit">
                    Edit
                </a>

                <a
                    href="kategori_hapus.php?id=<?= $data['id']; ?>"
                    class="btn btn-hapus"
                    onclick="return confirm('Yakin ingin menghapus kategori ini?')">
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
                Belum ada data kategori
            </td>
        </tr>

    <?php } ?>

    </tbody>
</table>

<br>

<a href="index.php" class="btn btn-kembali">
    Kembali ke Dashboard Admin
</a>

</body>
</html>