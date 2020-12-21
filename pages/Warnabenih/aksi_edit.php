<?php 

    include "../../lib/koneksi.php";

    
    $WarnaBenih =$_POST['WarnaBenih'];
    $id_bobotnilai =$_POST['id_bobotnilai'];
    
    $nilai_warnabenih =$_POST['nilai_warnabenih'];
    $id_warnaBenih=$_POST['id_warnaBenih'];
 

    $sql = "UPDATE tb_warnabenih SET WarnaBenih='$WarnaBenih', id_bobotnilai ='$id_bobotnilai', nilai_warnabenih='$nilai_warnabenih' WHERE id_warnaBenih='$id_warnaBenih'";
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