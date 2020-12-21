<?php
include "../../header.php";
include "../../lib/koneksi.php";
?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
   
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Form Tambah Bulir Padi</h4>
                  <div class="card-header-action">
                    <a href="main.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">

                  <form action="simpan.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                        <label>Jenis Bulir Padi</label>
                        <input type="text" class="form-control" required="" name="NamaBulir">
                      </div>
                      <div class="form-group">
                      <label>Bobot</label>
                      <select class="form-control" name ="id_bobotnilai">
                        <option>Pilih Bobot</option>
                        <?php
                                        include "../../lib/koneksi.php";
                                        $Querykota = mysqli_query($koneksi, "SELECT * FROM tb_bobotnilai");
                                        while ($id_bobotnilai = mysqli_fetch_array($Querykota)) {
                                        ?>
                                            <option value="<?= $id_bobotnilai['id_bobotnilai']; ?>"><?= $id_bobotnilai['Keterangan']; ?></option>
                                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label>
                        <input type="text" class="form-control" required="" name="nilai_bulirpadi">
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

