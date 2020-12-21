<?php 

    include "../../lib/koneksi.php";

    $NamaKriteria =($_POST['NamaKriteria']);
    $Bobot =($_POST['Bobot']);
    $idKriteria=$_POST['idKriteria'];
 

    $sql = "UPDATE tb_kriteria SET NamaKriteria='$NamaKriteria' , Bobot='$Bobot' WHERE idKriteria='$idKriteria'";
    $result = mysqli_query($koneksi, $sql);


    if ($result) {
        echo "
        <script>
            alert('Data berhasil diedit');
            window.location='main.php';
        </script>";
    } else {
        header("location:form_edit_kategori.php?idKriteria=$idKriteria");
    }
    


   
?>