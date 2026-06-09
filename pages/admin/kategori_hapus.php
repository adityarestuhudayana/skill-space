<?php
require_once '../../config/koneksi.php';

if (!isset($_GET['id'])) {
    header("Location: kategori_index.php");
    exit;
}

$id = $_GET['id'];

$hapus = mysqli_query($conn, "
    DELETE FROM categories
    WHERE id='$id'
");

if ($hapus) {

    echo "
    <script>
        alert('Kategori berhasil dihapus');
        window.location.href='kategori_index.php';
    </script>
    ";

} else {

    echo "
    <script>
        alert('Gagal menghapus kategori');
        window.location.href='kategori_index.php';
    </script>
    ";
}
?>