<?php
include "../../header.php";
?>

<?php

include "../../lib/koneksi.php";

$idKriteria = $_GET['idKriteria'];

$sql =  "SELECT * FROM tb_kriteria WHERE idKriteria = '$idKriteria'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($result);

$NamaKriteria = $data['NamaKriteria'];
$Bobot =$data['Bobot'];

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

                  <form action="aksi_edit_kriteria.php" method="POST">
                    <div class="card-body">
                    <input type="hidden" name="idKriteria" value="<?php echo $data['idKriteria']; ?>">
                      <div class="form-group">
                        <label>Nama Kriteria</label>
                        <input type="text" class="form-control" required="" name = "NamaKriteria" value="<?php echo $NamaKriteria; ?>">
                      </div>
                     
                      <div class="form-group">
                        <label>Nilai</label>
                        <input type="Nilai" class="form-control" required="" name="Bobot" value="<?php echo $Bobot; ?>">
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

