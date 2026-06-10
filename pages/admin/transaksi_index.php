<?php
require_once '../../config/koneksi.php';

$query = mysqli_query($conn, "
    SELECT
        orders.*,
        users.nama AS nama_pembeli,
        services.judul AS nama_jasa
    FROM orders
    LEFT JOIN users
        ON orders.buyer_id = users.id
    LEFT JOIN services
        ON orders.service_id = services.id
    ORDER BY orders.id DESC
");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:20px;
        }

        h2{
            margin-bottom:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table, th, td{
            border:1px solid #ccc;
        }

        th{
            background:#f4f4f4;
        }

        th, td{
            padding:10px;
            text-align:center;
        }

        .status{
            padding:5px 10px;
            border-radius:5px;
            color:white;
        }

        .pending{
            background:orange;
        }

        .completed{
            background:green;
        }

        .cancelled{
            background:red;
        }

        .btn{
            padding:6px 10px;
            text-decoration:none;
            border-radius:5px;
            color:white;
        }

        .btn-edit{
            background:#3498db;
        }

        .btn-kembali{
            display:inline-block;
            margin-top:20px;
            padding:10px 15px;
            background:#555;
            color:white;
            text-decoration:none;
            border-radius:5px;
        }
    </style>
</head>
<body>

<h2>Data Transaksi</h2>

<table>

    <thead>
        <tr>
            <th>No</th>
            <th>ID Pesanan</th>
            <th>Pembeli</th>
            <th>Jasa</th>
            <th>Total Harga</th>
            <th>Status</th>
            <th>Tanggal</th>
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

            <td><?= $data['nama_pembeli']; ?></td>

            <td><?= $data['nama_jasa']; ?></td>

            <td>
                Rp <?= number_format($data['total_harga'],0,',','.'); ?>
            </td>

            <td>

                <?php
                $status = $data['status'];

                if($status == 'pending'){
                    echo "<span class='status pending'>Pending</span>";
                }
                elseif($status == 'completed'){
                    echo "<span class='status completed'>Completed</span>";
                }
                else{
                    echo "<span class='status cancelled'>Cancelled</span>";
                }
                ?>

            </td>

            <td><?= $data['created_at']; ?></td>

            <td>
                <a href="transaksi_edit.php?id=<?= $data['id']; ?>"
                   class="btn btn-edit">
                    Edit Status
                </a>
            </td>

        </tr>

    <?php
        }

    }else{
    ?>

        <tr>
            <td colspan="8">
                Belum ada transaksi
            </td>
        </tr>

    <?php } ?>

    </tbody>

</table>

<a href="index.php" class="btn-kembali">
    Kembali ke Dashboard Admin
</a>

</body>
</html>