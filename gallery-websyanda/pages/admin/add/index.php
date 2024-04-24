<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DYOXHY</title>
    <link rel="stylesheet" href="/assets/css/global.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "../koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $foto=input($_POST["foto"]);
        $judul_foto=input($_POST["judul_foto"]);
        $deskripsi_foto=input($_POST["deskripsi_foto"]);
       

        //Query input menginput data kedalam tabel anggota
        $sql="insert into foto () values
		('$foto','$judul_foto','$deskripsi_foto','$','$')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
        }

    }
    ?>
    <h2 class="text-2xl font-bold mb-4">Input Data</h2>
    <div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mt-2">
                <div class="card-header">Tambah Foto</div>
                <div class="card-body">
                    <form action="../../../config/aksifoto.php" method="POST" enctype="multipart/form-data">
                        <label class="form-label">Judul foto</label>
                        <input type="text" name="judul_foto" class="form-control" required>
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi_foto" required></textarea>
                            <?php
                            $user_id = $_SESSION['user_id']; ?>
                        <label class="form-label">File</label>
                        <input type="file" class="form-control" name="lokasi_file" reqired>
                        <button type="submit" class="btn btn-primary mt-2" name="tambah">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
</div>

</body>
</html>