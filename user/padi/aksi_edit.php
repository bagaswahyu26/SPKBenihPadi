
<?php 

include "../../lib/koneksi.php";


$NamaPadi =$_POST['NamaPadi'];
$id_jenisPadi =$_POST['id_jenisPadi'];
$id_bulirPadi =$_POST['id_bulirPadi'];
$id_bentukPadi =$_POST['id_bentukPadi'];
$id_kadarAir =$_POST['id_kadarAir'];
$id_warnaBenih =$_POST['id_warnaBenih'];

$id_padi=$_POST['id_padi'];


$sql = "UPDATE tb_padi SET NamaPadi='$NamaPadi', id_jenisPadi ='$id_jenisPadi',id_bulirPadi ='$id_bulirPadi',id_bentukPadi ='$id_bentukPadi', id_kadarAir ='$id_kadarAir',id_warnaBenih ='$id_warnaBenih' WHERE id_padi='$id_padi'";
$result = mysqli_query($koneksi, $sql);


if ($result) {
    echo "
    <script>
        alert('Data berhasil diedit');
        window.location='main.php';
    </script>";
} else {
    echo "<script>
        alert('Data gagal diedit');
        window.location='form_edit.php?id_padi=$id_padi';
    </script>";
   
}




?>