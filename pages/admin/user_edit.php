<?php
require_once '../../config/koneksi.php';

if (!isset($_GET['id'])) {
    header("Location: user_index.php");
    exit;
}

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
$user = mysqli_fetch_assoc($query);

if (!$user) {
    echo "User tidak ditemukan!";
    exit;
}

if (isset($_POST['update'])) {

    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $update = mysqli_query($conn, "
        UPDATE users SET
            nama='$nama',
            npm='$npm',
            jurusan='$jurusan',
            email='$email',
            role='$role'
        WHERE id='$id'
    ");

    if ($update) {
        echo "
        <script>
            alert('Data user berhasil diupdate');
            window.location.href='user_index.php';
        </script>
        ";
        exit;
    } else {
        echo "Gagal update data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin:20px;
        }

        input, select{
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

<h2>Edit User</h2>

<form method="POST">

    <label>Nama</label>
    <input type="text" name="nama" value="<?= $user['nama']; ?>" required>

    <label>NPM</label>
    <input type="text" name="npm" value="<?= $user['npm']; ?>" required>

    <label>Jurusan</label>
    <input type="text" name="jurusan" value="<?= $user['jurusan']; ?>" required>

    <label>Email</label>
    <input type="email" name="email" value="<?= $user['email']; ?>" required>

    <label>Role</label>
    <select name="role" required>
        <option value="buyer" <?= $user['role']=='buyer'?'selected':''; ?>>
            Buyer
        </option>

        <option value="seller" <?= $user['role']=='seller'?'selected':''; ?>>
            Seller
        </option>

        <option value="admin" <?= $user['role']=='admin'?'selected':''; ?>>
            Admin
        </option>
    </select>

    <button type="submit" name="update">
        Update
    </button>

    <a href="user_index.php">
        <button type="button">
            Kembali
        </button>
    </a>

</form>

</body>
</html>