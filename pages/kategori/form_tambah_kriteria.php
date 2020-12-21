<?php
include "../../header.php";
?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
   
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Form Tambah Kriteria</h4>
                  <div class="card-header-action">
                    <a href="main.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">

                  <form action="simpan_Kriteria.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                        <label>Nama Kriteria</label>
                        <input type="text" class="form-control" required="" name = "NamaKriteria">
                      </div>
                     
                      <div class="form-group">
                        <label>Nilai</label>
                        <input type="Nilai" class="form-control" required="" name="Bobot">
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

