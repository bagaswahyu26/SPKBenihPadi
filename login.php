<?php
session_start();
include "lib/koneksi.php";

$userName = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM tb_user WHERE username ='$userName' AND PASSWORD='$password'";
$q = mysqli_query($koneksi, $sql);

$data = mysqli_fetch_array($q);

$jumlah = mysqli_num_rows($q);

if($jumlah==1){
    session_start();
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = $data['level'];
  

    header('location:dasboard.php');
}else{
    header('index.php');
}
