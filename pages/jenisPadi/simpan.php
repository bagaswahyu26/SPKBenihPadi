<?php

include "../../lib/koneksi.php";

$JenisPadi =$_POST['JenisPadi'];
$id_bobotnilai= $_POST['id_bobotnilai'];
$nilai_jenispadi =$_POST['nilai_jenispadi'];

$querySimpan = mysqli_query($koneksi, "INSERT INTO tb_jenisPadi(JenisPadi, id_bobotnilai, nilai_jenispadi) VALUES  ('$JenisPadi','$id_bobotnilai','$nilai_jenispadi')");
            if ($querySimpan) {
                echo "<script> alert('Data Berhasil Masuk'); window.location='main.php';</script>";
            } else {
                echo "<script> alert('Data  Gagal Dimasukkan'); window.location='form_tambah_bobot.php'; </script>";
            }


?>