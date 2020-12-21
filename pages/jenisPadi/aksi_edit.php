<?php 

    include "../../lib/koneksi.php";

    
    $JenisPadi =$_POST['JenisPadi'];
    $id_bobotnilai =$_POST['id_bobotnilai'];
    $nilai_jenispadi =$_POST['nilai_jenispadi'];
    $id_jenisPadi=$_POST['id_jenisPadi'];
 

    $sql = "UPDATE tb_jenispadi SET JenisPadi='$JenisPadi', id_bobotnilai ='$id_bobotnilai', nilai_jenispadi ='$nilai_jenispadi' WHERE id_jenisPadi='$id_jenisPadi'";
    $result = mysqli_query($koneksi, $sql);


    if ($result) {
        echo "
        <script>
            alert('Data berhasil diedit');
            window.location='main.php';
        </script>";
    } else {
        header("location:form_edit_bobot.php?id_bobotnilai=$id_bobotnilai");
    }
    


   
?>