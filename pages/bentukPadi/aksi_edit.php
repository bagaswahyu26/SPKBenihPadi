<?php 

    include "../../lib/koneksi.php";

    
    $BentukPadi =$_POST['BentukPadi'];
    $id_bobotnilai =$_POST['id_bobotnilai'];
    $nilai_bentukpadi = $_POST['nilai_bentukpadi'];
    $id_bentukPadi=$_POST['id_bentukPadi'];
 

    $sql = "UPDATE tb_bentukpadi SET BentukPadi='$BentukPadi', id_bobotnilai='$id_bobotnilai', nilai_bentukpadi='$nilai_bentukpadi' WHERE id_bentukPadi='$id_bentukPadi'";
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