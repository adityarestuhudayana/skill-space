<?php
require_once '../../config/koneksi.php';

if (!isset($_GET['id'])) {
    header("Location: kategori_index.php");
    exit;
}

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM categories WHERE id='$id'");
$kategori = mysqli_fetch_assoc($query);

if (!$kategori) {
    echo "Kategori tidak ditemukan!";
    exit;
}

if (isset($_POST['update'])) {

    $nama_kategori = $_POST['nama_kategori'];

    $update = mysqli_query($conn, "
        UPDATE categories
        SET nama_kategori='$nama_kategori'
        WHERE id='$id'
    ");

    if ($update) {
        echo "
        <script>
            alert('Kategori berhasil diupdate');
            window.location.href='kategori_index.php';
        </script>
        ";
        exit;
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Kategori</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:20px;
        }

        input{
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

<h2>Edit Kategori</h2>

<form method="POST">

    <label>Nama Kategori</label>
    <input
        type="text"
        name="nama_kategori"
        value="<?= $kategori['nama_kategori']; ?>"
        required
    >

    <button type="submit" name="update">
        Update
    </button>

    <a href="kategori_index.php">
        <button type="button">
            Kembali
        </button>
    </a>

</form>

</body>
</html>