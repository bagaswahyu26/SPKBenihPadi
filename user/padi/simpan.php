<?php

include "../../lib/koneksi.php";

$NamaPadi =$_POST['NamaPadi'];
$id_jenisPadi= $_POST['id_jenisPadi'];
$id_bulirPadi= $_POST['id_bulirPadi'];
$id_bentukPadi= $_POST['id_bentukPadi'];
$id_kadarAir= $_POST['id_kadarAir'];
$id_warnaBenih= $_POST['id_warnaBenih'];

$querySimpan = mysqli_query($koneksi, "INSERT INTO tb_padi(NamaPadi, id_jenisPadi, id_bulirPadi, id_bentukPadi, id_kadarAir, id_warnaBenih) VALUES  ('$NamaPadi','$id_jenisPadi','$id_bulirPadi','$id_bentukPadi','$id_kadarAir','$id_warnaBenih')");
            if ($querySimpan) {
                echo "<script> alert('Data Berhasil Masuk'); window.location='main.php';</script>";
            } else {
                echo "<script> alert('Data  Gagal Dimasukkan'); window.location='form_tambah.php'; </script>";
            }


?>