<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {

    include "../../lib/koneksi.php";
    
//kesalahan disini
    $id_warnaBenih = $_GET['id_warnaBenih'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM tb_warnabenih WHERE id_warnaBenih = '$id_warnaBenih'");
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
