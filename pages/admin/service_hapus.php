<?php
require_once '../../config/koneksi.php';

if (!isset($_GET['id'])) {
    header("Location: service_index.php");
    exit;
}

$id = $_GET['id'];

$cek = mysqli_query($conn, "SELECT * FROM services WHERE id = '$id'");

if (mysqli_num_rows($cek) == 0) {
    echo "
    <script>
        alert('Data jasa tidak ditemukan');
        window.location.href='service_index.php';
    </script>
    ";
    exit;
}

$hapus = mysqli_query($conn, "DELETE FROM services WHERE id = '$id'");

if ($hapus) {
    echo "
    <script>
        alert('Data jasa berhasil dihapus');
        window.location.href='service_index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Gagal menghapus data');
        window.location.href='service_index.php';
    </script>
    ";
}
?>