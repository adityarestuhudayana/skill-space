<?php
require_once '../../config/koneksi.php';

$totalUser = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM users")
);

$totalSeller = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM users WHERE role='seller'")
);

$totalBuyer = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM users WHERE role='buyer'")
);

$totalJasa = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM services")
);

$totalTransaksi = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM orders")
);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Admin</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:20px;
            background:#f5f5f5;
        }

        h2{
            margin-bottom:20px;
        }

        .container{
            display:grid;
            grid-template-columns:repeat(auto-fit, minmax(220px,1fr));
            gap:20px;
        }

        .card{
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 2px 5px rgba(0,0,0,0.1);
            text-align:center;
        }

        .card h3{
            margin-bottom:10px;
            color:#555;
        }

        .card p{
            font-size:30px;
            font-weight:bold;
            color:#2c3e50;
        }

        .btn{
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

<h2>Laporan Admin</h2>

<div class="container">

    <div class="card">
        <h3>Total User</h3>
        <p><?= $totalUser['total']; ?></p>
    </div>

    <div class="card">
        <h3>Total Seller</h3>
        <p><?= $totalSeller['total']; ?></p>
    </div>

    <div class="card">
        <h3>Total Buyer</h3>
        <p><?= $totalBuyer['total']; ?></p>
    </div>

    <div class="card">
        <h3>Total Jasa</h3>
        <p><?= $totalJasa['total']; ?></p>
    </div>

    <div class="card">
        <h3>Total Transaksi</h3>
        <p><?= $totalTransaksi['total']; ?></p>
    </div>

</div>

<a href="index.php" class="btn">
    Kembali ke Dashboard
</a>

</body>
</html>