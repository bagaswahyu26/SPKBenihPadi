<?php

include "../../lib/koneksi.php";

$NamaBulir =$_POST['NamaBulir'];
$id_bobotnilai= $_POST['id_bobotnilai'];
$nilai_bulirpadi = $_POST['nilai_bulirpadi'];

$querySimpan = mysqli_query($koneksi, "INSERT INTO tb_bulirpadi(NamaBulir, id_bobotnilai, nilai_bulirpadi) VALUES  ('$NamaBulir','$id_bobotnilai','$nilai_bulirpadi')");
            if ($querySimpan) {
                echo "<script> alert('Data Berhasil Masuk'); window.location='main.php';</script>";
            } else {
                echo "<script> alert('Data  Gagal Dimasukkan'); window.location='form_tambah_bobot.php'; </script>";
            }


?>