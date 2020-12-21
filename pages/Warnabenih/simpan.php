<?php

include "../../lib/koneksi.php";

$WarnaBenih =$_POST['WarnaBenih'];
$id_bobotnilai= $_POST['id_bobotnilai'];
$nilai_warnabenih =$_POST['nilai_warnabenih'];

$querySimpan = mysqli_query($koneksi, "INSERT INTO tb_warnabenih(WarnaBenih, id_bobotnilai, nilai_warnabenih) VALUES  ('$WarnaBenih','$id_bobotnilai','$nilai_warnabenih')");
            if ($querySimpan) {
                echo "<script> alert('Data Berhasil Masuk'); window.location='main.php';</script>";
            } else {
                echo "<script> alert('Data  Gagal Dimasukkan'); window.location='form_tambah_bobot.php'; </script>";
            }


?>