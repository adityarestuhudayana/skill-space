<?php
require_once '../../config/koneksi.php';

$totalUser = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) as total FROM users")
);

$totalSeller = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) as total FROM users WHERE role='seller'")
);

$totalJasa = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) as total FROM services")
);

$totalOrder = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) as total FROM orders")
);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Skill Space</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            background:#f5f5f5;
            padding:20px;
        }

        h1{
            margin-bottom:20px;
        }

        .container{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
            gap:20px;
        }

        .card{
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 2px 5px rgba(0,0,0,0.1);
        }

        .card h3{
            color:#555;
            margin-bottom:10px;
        }

        .card p{
            font-size:28px;
            font-weight:bold;
            color:#2c3e50;
        }

        .menu{
            margin-top:30px;
        }

        .menu a{
            display:inline-block;
            text-decoration:none;
            background:#3498db;
            color:white;
            padding:10px 15px;
            border-radius:5px;
            margin-right:10px;
            margin-bottom:10px;
        }

        .menu a:hover{
            background:#2980b9;
        }
    </style>
</head>
<body>

    <h1>Dashboard Admin</h1>

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
            <h3>Total Jasa</h3>
            <p><?= $totalJasa['total']; ?></p>
        </div>

        <div class="card">
            <h3>Total Pesanan</h3>
            <p><?= $totalOrder['total']; ?></p>
        </div>

    </div>

    <div class="menu">
        <a href="service_index.php">Kelola Jasa</a>
        <a href="kategori_index.php">Kelola Kategori</a>
    </div>

</body>
</html>