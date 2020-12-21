<?php

include "../../lib/koneksi.php";

$Bobot =$_POST['Bobot'];
$Keterangan= $_POST['Keterangan'];
$Nilai =$_POST['Nilai'];


$querySimpan = mysqli_query($koneksi, "INSERT INTO tb_bobotnilai(Bobot, Keterangan, Nilai) VALUES  ('$Bobot','$Keterangan','$Nilai')");
            if ($querySimpan) {
                echo "<script> alert('Data Berhasil Masuk'); window.location='main.php';</script>";
            } else {
                echo "<script> alert('Data  Gagal Dimasukkan'); window.location='form_tambah_bobot.php'; </script>";
            }


?>