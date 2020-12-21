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
                  <h4>Form Tambah Bobot</h4>
                  <div class="card-header-action">
                    <a href="main.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">

                  <form action="simpan_bobot.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                        <label>Bobot (Inisisal)</label>
                        <input type="text" class="form-control" required="" name="Bobot">
                      </div>
                     
                      <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" required="" name="Keterangan">
                      </div>
                      <div class="form-group">
                        <label>Nilai</label>
                        <input type="text" class="form-control" required="" name="Nilai">
                      </div>
                      
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Submit</button>
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

