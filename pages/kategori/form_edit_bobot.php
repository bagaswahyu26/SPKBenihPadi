<?php
include "../../header.php";
?>

<?php

include "../../lib/koneksi.php";

$id_bobotnilai = $_GET['id_bobotnilai'];

$sql =  "SELECT * FROM tb_bobotnilai WHERE id_bobotnilai = '$id_bobotnilai'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($result);

$Bobot =$data['Bobot'];
$Keterangan =$data['Keterangan'];
$Nilai =$data['Nilai'];

?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
   
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Form Edit Kriteria</h4>
                  <div class="card-header-action">
                    <a href="main.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">

                  <form action="aksi_edit_bobot.php" method="POST">
                    <div class="card-body">
                    <input type="hidden" name="id_bobotnilai" value="<?php echo $data['id_bobotnilai']; ?>">
                      <div class="form-group">
                        <label>Bobot(Inisial)</label>
                        <input type="text" class="form-control" required="" name = "Bobot" value="<?php echo $Bobot; ?>">
                      </div>
                     
                      <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" required="" name="Keterangan" value="<?php echo $Keterangan; ?>">
                      </div>
                      <div class="form-group">
                        <label>Nilai</label>
                        <input type="Nilai" class="form-control" required="" name="Nilai" value="<?php echo $Nilai; ?>">
                      </div>
                      
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" type ="submit">Submit</button>
                    </div>
                  </form> 
            
              </div>
            </div>
            
          </div>
  
        </section>
      </div>


<?php
include "../../footer.php";
?>

