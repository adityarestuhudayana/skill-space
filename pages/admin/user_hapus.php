<?php
require_once '../../config/koneksi.php';

if (!isset($_GET['id'])) {
    header("Location: user_index.php");
    exit;
}

$id = $_GET['id'];

$cek = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");

if (mysqli_num_rows($cek) == 0) {
    echo "
    <script>
        alert('User tidak ditemukan');
        window.location.href='user_index.php';
    </script>
    ";
    exit;
}

$hapus = mysqli_query($conn, "DELETE FROM users WHERE id='$id'");

if ($hapus) {
    echo "
    <script>
        alert('User berhasil dihapus');
        window.location.href='user_index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Gagal menghapus user');
        window.location.href='user_index.php';
    </script>
    ";
}
?>