<?php
require_once '../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama     = mysqli_real_escape_string($conn, $_POST['nama']);
    $npm      = mysqli_real_escape_string($conn, $_POST['npm']);
    $jurusan  = mysqli_real_escape_string($conn, $_POST['jurusan']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Default role saat daftar
    $role = "buyer";

    // Cek email sudah ada atau belum
    $cek = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

    if (mysqli_num_rows($cek) > 0) {
        echo "Email sudah terdaftar!";
        exit;
    }

    $query = "INSERT INTO users
              (nama, npm, jurusan, email, password, role, created_at)
              VALUES
              ('$nama', '$npm', '$jurusan', '$email', '$password', '$role', NOW())";

    if (mysqli_query($conn, $query)) {
        echo "Registrasi berhasil!";
        // nanti bisa redirect ke login
        // header("Location: ../login.php");
    } else {
        echo "Registrasi gagal: " . mysqli_error($conn);
    }
}
?>