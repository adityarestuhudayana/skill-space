<?php
require_once '../../config/koneksi.php';

if (!isset($_GET['id'])) {
    header("Location: service_index.php");
    exit;
}

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM services WHERE id = '$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data jasa tidak ditemukan!";
    exit;
}

if (isset($_POST['update'])) {

    $seller_id = $_POST['seller_id'];
    $category_id = $_POST['category_id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $estimasi_pengerjaan = $_POST['estimasi_pengerjaan'];
    $status = $_POST['status'];

    $update = mysqli_query($conn, "
        UPDATE services SET
            seller_id='$seller_id',
            category_id='$category_id',
            judul='$judul',
            deskripsi='$deskripsi',
            harga='$harga',
            estimasi_pengerjaan='$estimasi_pengerjaan',
            status='$status'
        WHERE id='$id'
    ");

    if ($update) {
        echo "
        <script>
            alert('Data jasa berhasil diupdate');
            window.location.href='service_index.php';
        </script>
        ";
        exit;
    } else {
        echo "Gagal update data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jasa</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        input,
        textarea,
        select{
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
        }

        button{
            padding: 10px 15px;
        }
    </style>
</head>
<body>

<h2>Edit Jasa</h2>

<form method="POST">

    <label>Seller ID</label>
    <input type="number" name="seller_id"
        value="<?= $data['seller_id']; ?>" required>

    <label>Category ID</label>
    <input type="number" name="category_id"
        value="<?= $data['category_id']; ?>" required>

    <label>Judul Jasa</label>
    <input type="text" name="judul"
        value="<?= $data['judul']; ?>" required>

    <label>Deskripsi</label>
    <textarea name="deskripsi" rows="5" required><?= $data['deskripsi']; ?></textarea>

    <label>Harga</label>
    <input type="number" name="harga"
        value="<?= $data['harga']; ?>" required>

    <label>Estimasi Pengerjaan (Hari)</label>
    <input type="number" name="estimasi_pengerjaan"
        value="<?= $data['estimasi_pengerjaan']; ?>" required>

    <label>Status</label>
    <select name="status" required>
        <option value="pending" <?= ($data['status'] == 'pending') ? 'selected' : ''; ?>>
            Pending
        </option>

        <option value="approved" <?= ($data['status'] == 'approved') ? 'selected' : ''; ?>>
            Approved
        </option>

        <option value="rejected" <?= ($data['status'] == 'rejected') ? 'selected' : ''; ?>>
            Rejected
        </option>
    </select>

    <button type="submit" name="update">
        Update
    </button>

    <a href="service_index.php">
        <button type="button">
            Kembali
        </button>
    </a>

</form>

</body>
</html>