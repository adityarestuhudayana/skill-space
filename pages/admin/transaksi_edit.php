<?php
require_once '../../config/koneksi.php';

if (!isset($_GET['id'])) {
    header("Location: transaksi_index.php");
    exit;
}

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM orders WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data transaksi tidak ditemukan!";
    exit;
}

if (isset($_POST['update'])) {

    $status = $_POST['status'];

    $update = mysqli_query($conn, "
        UPDATE orders
        SET status='$status'
        WHERE id='$id'
    ");

    if ($update) {
        echo "
        <script>
            alert('Status transaksi berhasil diperbarui');
            window.location.href='transaksi_index.php';
        </script>
        ";
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Transaksi</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:20px;
        }

        select{
            width:100%;
            padding:10px;
            margin-bottom:15px;
        }

        button{
            padding:10px 15px;
        }
    </style>
</head>
<body>

<h2>Edit Status Transaksi</h2>

<form method="POST">

    <label>Status</label>

    <select name="status" required>

        <option value="pending"
            <?= ($data['status']=='pending') ? 'selected' : ''; ?>>
            Pending
        </option>

        <option value="completed"
            <?= ($data['status']=='completed') ? 'selected' : ''; ?>>
            Completed
        </option>

        <option value="cancelled"
            <?= ($data['status']=='cancelled') ? 'selected' : ''; ?>>
            Cancelled
        </option>

    </select>

    <button type="submit" name="update">
        Update
    </button>

    <a href="transaksi_index.php">
        <button type="button">
            Kembali
        </button>
    </a>

</form>

</body>
</html>