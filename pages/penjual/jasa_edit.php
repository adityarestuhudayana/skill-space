<?php
require_once '../../config/koneksi.php';

$id = $_GET['id'];

$data = mysqli_fetch_assoc(
    mysqli_query($conn,"
        SELECT * FROM services
        WHERE id='$id'
    ")
);

if(isset($_POST['update'])){

    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    mysqli_query($conn,"
        UPDATE services
        SET
        judul='$judul',
        deskripsi='$deskripsi',
        harga='$harga'
        WHERE id='$id'
    ");

    echo "
    <script>
        alert('Jasa berhasil diupdate');
        window.location='jasa_index.php';
    </script>
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Jasa</title>
</head>
<body>

<h2>Edit Jasa</h2>

<form method="POST">

    <p>Judul</p>
    <input
        type="text"
        name="judul"
        value="<?= $data['judul']; ?>"
        required>

    <p>Deskripsi</p>

    <textarea
        name="deskripsi"
        required><?= $data['deskripsi']; ?></textarea>

    <p>Harga</p>

    <input
        type="number"
        name="harga"
        value="<?= $data['harga']; ?>"
        required>

    <br><br>

    <button type="submit" name="update">
        Update
    </button>

</form>

</body>
</html>