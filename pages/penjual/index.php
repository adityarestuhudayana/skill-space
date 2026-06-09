<?php
require_once '../../config/koneksi.php';

/*
sementara pakai seller_id = 1
nanti diganti session login
*/

$seller_id = 1;

$totalJasa = mysqli_fetch_assoc(mysqli_query(
    $conn,
    "SELECT COUNT(*) as total
     FROM services
     WHERE seller_id='$seller_id'"
));

$totalPesanan = mysqli_fetch_assoc(mysqli_query(
    $conn,
    "SELECT COUNT(*) as total
     FROM orders o
     JOIN services s ON o.service_id = s.id
     WHERE s.seller_id='$seller_id'"
));

$totalPending = mysqli_fetch_assoc(mysqli_query(
    $conn,
    "SELECT COUNT(*) as total
     FROM orders o
     JOIN services s ON o.service_id = s.id
     WHERE s.seller_id='$seller_id'
     AND o.status='pending'"
));

$totalSelesai = mysqli_fetch_assoc(mysqli_query(
    $conn,
    "SELECT COUNT(*) as total
     FROM orders o
     JOIN services s ON o.service_id = s.id
     WHERE s.seller_id='$seller_id'
     AND o.status='completed'"
));
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Dashboard Seller</title>

<style>

body{
    font-family:Arial;
    margin:20px;
    background:#f5f5f5;
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
    box-shadow:0 2px 5px rgba(0,0,0,.1);
    text-align:center;
}

.card h3{
    margin-bottom:10px;
}

.card p{
    font-size:28px;
    font-weight:bold;
}

</style>

</head>
<body>

<h2>Dashboard Penjual</h2>

<div class="container">

<div class="card">
<h3>Total Jasa Saya</h3>
<p><?= $totalJasa['total']; ?></p>
</div>

<div class="card">
<h3>Total Pesanan</h3>
<p><?= $totalPesanan['total']; ?></p>
</div>

<div class="card">
<h3>Pending</h3>
<p><?= $totalPending['total']; ?></p>
</div>

<div class="card">
<h3>Selesai</h3>
<p><?= $totalSelesai['total']; ?></p>
</div>

</div>

</body>
</html>