<?php
session_start();
include '../config/connect.php';


$email = $_POST['email'];
$password =$_POST['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' AND password='$password'");

$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $data = mysqli_fetch_array($sql);
    

    $_SESSION['email'] = $data['email'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['status'] = 'login';
    $_SESSION['user_id'] = $data['user_id'];
    echo "<script>
    alert('Login berhasil');
    location.href='../index.php';
    </script>";
}else{
    echo "<script>
    alert('Username atau Password salah!!!');
    location.href='../login.php';
    </script>";
}

?>

