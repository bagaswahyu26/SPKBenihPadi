<?php

include "../../lib/koneksi.php";

$Kadarair =$_POST['KadarAir'];
$id_bobotnilai= $_POST['id_bobotnilai'];
$nilai_kadarair =$_POST['nilai_kadarair'];

$querySimpan = mysqli_query($koneksi, "INSERT INTO tb_kadarair(KadarAir, id_bobotnilai,nilai_kadarair) VALUES  ('$Kadarair','$id_bobotnilai','$nilai_kadarair')");
            if ($querySimpan) {
                echo "<script> alert('Data Berhasil Masuk'); window.location='main.php';</script>";
            } else {
                echo "<script> alert('Data  Gagal Dimasukkan'); window.location='form_tambah.php'; </script>";
            }


?>