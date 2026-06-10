<?php
require_once '../../config/koneksi.php';

$message = '';

if(isset($_POST['simpan'])){

    $seller_id = $_POST['seller_id'];
    $category_id = $_POST['category_id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $estimasi_pengerjaan = $_POST['estimasi_pengerjaan'];
    $status = $_POST['status'];

    $query = mysqli_query($conn, "
        INSERT INTO services (
            seller_id,
            category_id,
            judul,
            deskripsi,
            harga,
            estimasi_pengerjaan,
            status,
            created_at
        )
        VALUES (
            '$seller_id',
            '$category_id',
            '$judul',
            '$deskripsi',
            '$harga',
            '$estimasi_pengerjaan',
            '$status',
            NOW()
        )
    ");

    if($query){
        echo "
        <script>
            alert('Jasa berhasil ditambahkan');
            window.location.href='service_index.php';
        </script>
        ";
        exit;
    }else{
        $message = "Gagal menambahkan jasa : " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jasa</title>

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
            margin-top: 5px;
            margin-bottom: 15px;
        }

        button{
            padding: 10px 15px;
        }

        .error{
            color:red;
        }
    </style>
</head>
<body>

<h2>Tambah Jasa</h2>

<?php if(!empty($message)){ ?>
    <p class="error"><?= $message ?></p>
<?php } ?>

<form method="POST">

    <label>Seller ID</label>
    <input type="number" name="seller_id" required>

    <label>Category ID</label>
    <input type="number" name="category_id" required>

    <label>Judul Jasa</label>
    <input type="text" name="judul" required>

    <label>Deskripsi</label>
    <textarea name="deskripsi" rows="5" required></textarea>

    <label>Harga</label>
    <input type="number" name="harga" required>

    <label>Estimasi Pengerjaan (Hari)</label>
    <input type="number" name="estimasi_pengerjaan" required>

    <label>Status</label>
    <select name="status" required>
        <option value="pending">Pending</option>
        <option value="approved">Approved</option>
        <option value="rejected">Rejected</option>
    </select>

    <button type="submit" name="simpan">
        Simpan
    </button>

    <a href="service_index.php">
        <button type="button">
            Kembali
        </button>
    </a>

</form>

</body>
</html>