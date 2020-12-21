<?php

include "../../lib/koneksi.php";

$NamaKriteria = $_POST['NamaKriteria'];
$Bobot =$_POST['Bobot'];


$querySimpan = mysqli_query($koneksi, "INSERT INTO tb_kriteria(NamaKriteria, Bobot) VALUES  ('$NamaKriteria','$Bobot')");
            if ($querySimpan) {
                echo "<script> alert('Data member Berhasil Masuk'); window.location='main.php';</script>";
            } else {
                echo "<script> alert('Data Member Gagal Dimasukkan'); window.location='form_tambah_kriteria.php'; </script>";
            }


?>