<?php
require_once '../../config/koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM services ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jasa</title>

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
    </style>
</head>
<body>

    <h2>Data Jasa</h2>

    <a href="service_tambah.php" class="btn btn-tambah">
        + Tambah Jasa
    </a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Judul</th>
                <th>Harga</th>
                <th>Estimasi</th>
                <th>Status</th>
                <th>Tanggal Dibuat</th>
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
                <td><?= $data['judul']; ?></td>
                <td>Rp <?= number_format($data['harga'], 0, ',', '.'); ?></td>
                <td><?= $data['estimasi_pengerjaan']; ?> Hari</td>
                <td><?= ucfirst($data['status']); ?></td>
                <td><?= $data['created_at']; ?></td>

                <td>

                    <a
                        href="service_edit.php?id=<?= $data['id']; ?>"
                        class="btn btn-edit">
                        Edit
                    </a>

                    <a
                        href="service_hapus.php?id=<?= $data['id']; ?>"
                        class="btn btn-hapus"
                        onclick="return confirm('Yakin ingin menghapus jasa ini?')">
                        Hapus
                    </a>

                </td>
            </tr>

        <?php
            }
        }else{
        ?>

            <tr>
                <td colspan="8">
                    Belum ada data jasa
                </td>
            </tr>

        <?php } ?>

        </tbody>
    </table>

    <br>

    <a href="index.php">
        Kembali ke Dashboard Admin
    </a>

</body>
</html>