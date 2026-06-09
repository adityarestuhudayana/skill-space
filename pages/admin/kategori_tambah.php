<?php
require_once '../../config/koneksi.php';

$message = '';

if (isset($_POST['simpan'])) {

    $nama_kategori = trim($_POST['nama_kategori']);

    if (empty($nama_kategori)) {
        $message = "Nama kategori tidak boleh kosong!";
    } else {

        $nama_kategori = mysqli_real_escape_string($conn, $nama_kategori);

        $query = mysqli_query(
            $conn,
            "INSERT INTO categories (nama_kategori)
             VALUES ('$nama_kategori')"
        );

        if ($query) {
            echo "
            <script>
                alert('Kategori berhasil ditambahkan');
                window.location.href='index.php';
            </script>
            ";
            exit;
        } else {
            $message = "Gagal menambahkan kategori: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>
</head>
<body>

    <h2>Tambah Kategori</h2>

    <?php if (!empty($message)) : ?>
        <p style="color:red;">
            <?= $message; ?>
        </p>
    <?php endif; ?>

    <form method="POST">

        <label for="nama_kategori">Nama Kategori</label>
        <br><br>

        <input
            type="text"
            id="nama_kategori"
            name="nama_kategori"
            placeholder="Masukkan nama kategori"
            required
        >

        <br><br>

        <button type="submit" name="simpan">
            Simpan
        </button>

        <a href="index.php">
            <button type="button">
                Kembali
            </button>
        </a>

    </form>

</body>
</html>