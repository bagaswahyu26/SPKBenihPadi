<?php 

    include "../../lib/koneksi.php";

    
    $KadarAir =$_POST['KadarAir'];
    $id_bobotnilai =$_POST['id_bobotnilai'];
    $nilai_kadarair =$_POST['nilai_kadarair'];
    
    $id_kadarAir=$_POST['id_kadarAir'];
 

    $sql = "UPDATE tb_kadarair SET KadarAir='$KadarAir', id_bobotnilai ='$id_bobotnilai',nilai_kadarair ='$nilai_kadarair'  WHERE id_kadarAir='$id_kadarAir'";
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