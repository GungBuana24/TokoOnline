<?php

$email        = $_POST['email'];
$pass        = $_POST['pass'];

$kon = mysqli_connect("localhost","root","","toko");
 echo "SELECT * FROM users WHERE email = '$email' and pass='$pass'";
$query = mysqli_query($kon,"SELECT * FROM users WHERE email = '$email' and pass='$pass'");

$login = mysqli_num_rows($query);

if($login ==0 ){
    echo "Username atau password salah";
    header("location:login.php");
}else{
    while($data=mysqli_fetch_array($query)){
        if($data['akses']=='admin'){
            header("location:admin/admin.php");
        }else if($data['akses']=='costumers'){
            header("location:home.php");
        }
    }
}
?>