<?php
session_start();
include '../config/connect.php';

$fotoid = $_POST['foto_id'];
$userid = $_SESSION ['user_id'];
$isikomentar = $_POST['isi_komentar'];
$tanggalkomentar = date('Y-m-d');

$query = mysqli_query($koneksi, "INSERT INTO komentar_foto VALUES('','$fotoid','$userid','$isikomentar','$tanggalkomentar')");

echo "<script>
location.href='../pages/gallery/index.ph';
</script>";

?>