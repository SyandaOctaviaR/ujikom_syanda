
<?php
include'connect.php';

$user_name = $_POST['user_name'];
$password = $_POST['password'];
$email = $_POST['email'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

$sql = mysqli_query($koneksi, "INSERT INTO user VALUES ('','$user_name','$password','$email','$nama_lengkap','$alamat')");


if ($sql){
    echo "<script>
    alert('Pendaftaran akun berhasil');
    location.href='../pages/auth/sign-in/';
    </script>";
}

?>