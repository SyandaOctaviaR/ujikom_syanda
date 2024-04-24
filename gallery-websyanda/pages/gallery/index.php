
<?php session_start();
include "../../config/connect.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <main class="px-52 my-20 font-lora">
        <section>
            <a href="/gallery-websyanda/" class="flex gap-x-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 my-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                </svg>
                back</a>
            <h1 class="text-xl mt-4">All Photos</h1>
            <a href="../../pages/admin/index.php">
                       <?php 
            // Cek apakah user sudah login
            if(isset($_SESSION['status']) && $_SESSION['status'] === 'login') { 
                ?>
                        <button class="bg-[rgb(113,43,43)] text-white px-7 py-2 rounded-full hover:bg-white hover:text-[rgb(41,39,39)] hover:border-2 transition border-2 border-[rgb(113,43,43)]">edit</button>
                <?php 
            } 
        ?>
        
<div class="container" mt-2>
  <div class="row">
    <?php 
  $query = mysqli_query($koneksi, "SELECT * FROM foto INNER JOIN user ON foto.user_id=user.user_id");
while($data = mysqli_fetch_array($query)){
    ?>
    <div class="col-md-3">
    <a type="button" data-bs-toggle="modal" data-bs-target="#komentar<?php echo $data['foto_id'] ?>">

            <div class="card mb-2">
                <img src="../../assets/img/<?php echo $data['lokasi_file'] ?>" class="card-img-top" title="<?php echo $data['judul_foto'] ?>" style="height: 12rem;">
                <div class="card-footer text-center">                   
                    <?php
                    $fotoid = $data['foto_id'];
                    $user_id = $data['user_id'];
                    $ceksuka = mysqli_query($koneksi, "SELECT * FROM like_foto WHERE foto_id='$fotoid' AND user_id='$user_id'");
                    if (mysqli_num_rows($ceksuka) == 1) { ?>
                        <a href="../config/proseslike.php?fotoid=<?php echo $data['foto_id'] ?>" type="submit" name="batalsuka"><i class="fa fa-heart"></i></a>
                    <?php }else{ ?>
                        <a href="../config/proseslike.php?fotoid=<?php echo $data['foto_id'] ?>" type="submit" name="suka"><i class="fa-regular fa-heart"></i></a>
                    <?php }
                    $like = mysqli_query($koneksi, "SELECT * FROM like_foto WHERE foto_id='$fotoid'");
                    echo mysqli_num_rows($like). ' Suka';
                    ?>

                    <a style="text-decoration:none" type="button" class="ms-5" data-bs-toggle="modal" data-bs-target="#komentar<?= $data['foto_id'] ?>"><i class="fa-regular fa-comment"></i></a>
                    <?php
                    $jmlkomen = mysqli_query($koneksi, "SELECT * FROM komentar_foto WHERE foto_id='$fotoid'");
                    echo mysqli_num_rows($jmlkomen).' komentar';
                    ?>
                </div>
            </div>
            </a>
            
            <!-- Modal -->
<div class="modal fade" id="komentar<?php echo $data['foto_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8">
          <img src="../assets/img/<?php echo $data['lokasi_file'] ?>" class="card-img-top" title="<?php echo $data['judul_foto'] ?>">
          </div>
          <div class="col-md-4">
            <div class="m-2">
              <div class="overflow-auto">
                <div class="sticky-top">
                  <strong><?php echo $data['judul_foto'] ?></strong><br>
                  <span class="badge bg-secondary"><?php echo $data['nama_lengkap'] ?></span>
                  <span class="badge bg-secondary"><?php echo $data['tanggal_unggah'] ?></span>
                </div>
                <hr>
                <p align="left">
                  <?php echo $data['deskripsi_foto'] ?>
                </p>
                <hr>
                <?php
                $fotoid = $data['foto_id'];
                $komentar = mysqli_query($koneksi,"SELECT * FROM komentar_foto INNER JOIN user ON komentar_foto.user_id=user.user_id WHERE komentar_foto.foto_id='$fotoid'");
                while($row = mysqli_fetch_array($komentar)){
                ?>
                <p align="left">
                  <strong><?php echo $row['nama_lengkap'] ?></strong>
                  <?php echo $row['isikomentar'] ?>
                </p>
                <?php } ?>
                <hr>
                <div class="sticky-bottom">
                  <form action="../config/proseskomentar.php" method="POST">
                    <div class="input-group">
                      <input type="hidden" name="fotoid" value="<?php echo $data['foto_id'] ?>">
                      <input type="text" name="isikomentar" class="form-control" placeholder="Tambah Komentar">
                      <div class="input-ground-prepend">
                        <button type="submit" name="kirimkomentar" class="btn btn-outline-primary">Kirim</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

        </div>
        <?php } ?>
  </div>
</div>
            </a>
        </section>
    </main>
</body>

</html>