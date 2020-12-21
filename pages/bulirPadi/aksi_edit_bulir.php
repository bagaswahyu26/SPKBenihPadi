<?php 

    include "../../lib/koneksi.php";

    
    $NamaBulir =$_POST['NamaBulir'];
    $id_bobotnilai =$_POST['id_bobotnilai'];
    $nilai_bulirpadi = $_POST['nilai_bulirpadi'];
    
    $id_bulirPadi=$_POST['id_bulirPadi'];
 

    $sql = "UPDATE tb_bulirpadi SET NamaBulir='$NamaBulir', id_bobotnilai ='$id_bobotnilai', nilai_bulirpadi='$nilai_bulirpadi' WHERE id_bulirPadi='$id_bulirPadi'";
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