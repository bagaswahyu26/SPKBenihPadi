<?php 

    include "../../lib/koneksi.php";

    
    $Bobot =($_POST['Bobot']);
    $Keterangan =($_POST['Keterangan']);
    $Nilai =($_POST['Nilai']);
    
    $id_bobotnilai=$_POST['id_bobotnilai'];
 

    $sql = "UPDATE tb_bobotnilai SET Bobot='$Bobot', Keterangan ='$Bobot', Nilai='$Nilai' WHERE id_bobotnilai='$id_bobotnilai'";
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