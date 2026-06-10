<?php
require_once '../../config/koneksi.php';

$message = '';

// sementara pakai seller_id = 1
// nanti diganti session login
$seller_id = 1;

$kategori = mysqli_query($conn, "
    SELECT * FROM categories
    ORDER BY nama_kategori ASC
");

if(isset($_POST['simpan'])){

    $category_id = $_POST['category_id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $estimasi_pengerjaan = $_POST['estimasi_pengerjaan'];

    $status = 'pending';

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
            window.location.href='jasa_index.php';
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
            box-sizing: border-box;
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
    <p class="error"><?= $message; ?></p>
<?php } ?>

<form method="POST">

    <label>Kategori</label>

    <select name="category_id" required>

        <option value="">
            -- Pilih Kategori --
        </option>

        <?php while($k = mysqli_fetch_assoc($kategori)){ ?>

            <option value="<?= $k['id']; ?>">
                <?= $k['nama_kategori']; ?>
            </option>

        <?php } ?>

    </select>

    <label>Judul Jasa</label>
    <input type="text" name="judul" required>

    <label>Deskripsi</label>
    <textarea name="deskripsi" rows="5" required></textarea>

    <label>Harga</label>
    <input type="number" name="harga" required>

    <label>Estimasi Pengerjaan (Hari)</label>
    <input type="number" name="estimasi_pengerjaan" required>

    <button type="submit" name="simpan">
        Simpan
    </button>

    <a href="jasa_index.php">
        <button type="button">
            Kembali
        </button>
    </a>

</form>

</body>
</html>