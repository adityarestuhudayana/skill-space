<?php
require_once '../../config/koneksi.php';

$id = $_GET['id'];

mysqli_query($conn,"
    DELETE FROM services
    WHERE id='$id'
");

header("Location: jasa_index.php");
exit;