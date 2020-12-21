<?php

include "../../lib/koneksi.php";

$BentukPadi =$_POST['BentukPadi'];
$id_bobotnilai= $_POST['id_bobotnilai'];
$nilai_bentukpadi = $_POST['nilai_bentukpadi'];

$querySimpan = mysqli_query($koneksi, "INSERT INTO tb_bentukpadi(BentukPadi, id_bobotnilai, nilai_bentukpadi) VALUES  ('$BentukPadi','$id_bobotnilai','$nilai_bentukpadi')");
            if ($querySimpan) {
                echo "<script> alert('Data Berhasil Masuk'); window.location='main.php';</script>";
            } else {
                echo "<script> alert('Data  Gagal Dimasukkan'); window.location='form_tambah_bobot.php'; </script>";
            }


?>