<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {

    include "../../lib/koneksi.php";
    
//kesalahan disini
    $id_jenisPadi = $_GET['id_jenisPadi'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM tb_jenisPadi WHERE id_jenisPadi = '$id_jenisPadi'");
    if ($QueryHapus) {
        echo "
        <script>
            alert('Data berhasil dihapus');
            window.location='main.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            window.location = '$admin_url'+'adminweb.php?module=list_admin';
        </script>";
    }
}
