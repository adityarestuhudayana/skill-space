<?php
require_once '../../config/koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola User</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2{
            margin-bottom: 20px;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td{
            border: 1px solid #ddd;
        }

        th{
            background: #3498db;
            color: white;
        }

        th, td{
            padding: 10px;
            text-align: left;
        }

        tr:nth-child(even){
            background: #f9f9f9;
        }

        .btn{
            text-decoration: none;
            color: white;
            padding: 6px 10px;
            border-radius: 5px;
        }

        .edit{
            background: #f39c12;
        }

        .hapus{
            background: #e74c3c;
        }

        .kembali{
            display: inline-block;
            margin-top: 20px;
            background: #3498db;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2>Kelola User</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Role</th>
            <th>Tanggal Daftar</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        <?php while($user = mysqli_fetch_assoc($query)) : ?>

        <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['nama']; ?></td>
            <td><?= $user['npm']; ?></td>
            <td><?= $user['jurusan']; ?></td>
            <td><?= $user['email']; ?></td>
            <td><?= ucfirst($user['role']); ?></td>
            <td><?= $user['created_at']; ?></td>

            <td>
                <a class="btn edit"
                   href="user_edit.php?id=<?= $user['id']; ?>">
                    Edit
                </a>

                <a class="btn hapus"
                   href="user_hapus.php?id=<?= $user['id']; ?>"
                   onclick="return confirm('Yakin ingin menghapus user ini?')">
                    Hapus
                </a>
            </td>
        </tr>

        <?php endwhile; ?>

    </tbody>
</table>

<a href="index.php" class="kembali">
    Kembali ke Dashboard
</a>

</body>
</html>