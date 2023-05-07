<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$username            = $_POST['username'];
$email           = $_POST['email'];
$password        = $_POST['pass'];
$akses              = 'costumers';
// query SQL untuk insert data
$result = mysqli_query($kon,"SELECT email FROM users WHERE email = '$email'");

if(mysqli_fetch_assoc($result)){
    echo  "<script>alert('email sudah terdaftar'); </script>";
    return 0;
}
$query="INSERT INTO users SET username='$username ',email='$email', pass='$password', akses='$akses'";
mysqli_query($kon, $query);
// mengalihkan ke halaman index.php
if (mysqli_affected_rows($kon)>0){
    header("location:home.php");
    exit();
}
?>