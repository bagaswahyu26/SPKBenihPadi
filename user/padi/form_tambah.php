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
                  <h4>Form Tambah Alternatif</h4>
                  <div class="card-header-action">
                    <a href="main.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">

                  <form action="simpan.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                        <label>Nama Padi</label>
                        <input type="text" class="form-control" required="" name="NamaPadi">
                      </div>
                      <div class="form-group">
                      <label>Jenis Padi</label>
                      <select class="form-control" name ="id_jenisPadi">
                        <option>Pilih Jenis Padi</option>
                        <?php
                                        include "../../lib/koneksi.php";
                                        $Querykota = mysqli_query($koneksi, "SELECT * FROM tb_jenispadi");
                                        while ($id_jenisPadi = mysqli_fetch_array($Querykota)) {
                                        ?>
                                            <option value="<?= $id_jenisPadi['id_jenisPadi']; ?>"><?= $id_jenisPadi['JenisPadi']; ?></option>
                                        <?php } ?>
                      </select>
                       </div>
                    <div class="form-group">
                      <label>Bulir Padi</label>
                      <select class="form-control" name ="id_bulirPadi">
                        <option>Pilih Bulir Padi</option>
                        <?php
                                        include "../../lib/koneksi.php";
                                        $Querykota = mysqli_query($koneksi, "SELECT * FROM tb_bulirpadi");
                                        while ($id_bulirPadi = mysqli_fetch_array($Querykota)) {
                                        ?>
                                            <option value="<?= $id_bulirPadi['id_bulirPadi']; ?>"><?= $id_bulirPadi['NamaBulir']; ?></option>
                                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Bentuk Padi</label>
                      <select class="form-control" name ="id_bentukPadi">
                        <option>Pilih Bentuk Padi</option>
                        <?php
                                        include "../../lib/koneksi.php";
                                        $Querykota = mysqli_query($koneksi, "SELECT * FROM tb_bentukpadi");
                                        while ($id_bentukPadi = mysqli_fetch_array($Querykota)) {
                                        ?>
                                            <option value="<?= $id_bentukPadi['id_bentukPadi']; ?>"><?= $id_bentukPadi['BentukPadi']; ?></option>
                                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Kadar Air</label>
                      <select class="form-control" name ="id_kadarAir">
                        <option>Pilih Kadar Air</option>
                        <?php
                                        include "../../lib/koneksi.php";
                                        $Querykota = mysqli_query($koneksi, "SELECT * FROM tb_kadarair");
                                        while ($id_kadarAir = mysqli_fetch_array($Querykota)) {
                                        ?>
                                            <option value="<?= $id_kadarAir['id_kadarAir']; ?>"><?= $id_kadarAir['KadarAir']; ?></option>
                                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Warna Benih</label>
                      <select class="form-control" name ="id_warnaBenih">
                        <option>Pilih Warna Benih</option>
                        <?php
                                        include "../../lib/koneksi.php";
                                        $Querykota = mysqli_query($koneksi, "SELECT * FROM tb_warnabenih");
                                        while ($id_warnaBenih = mysqli_fetch_array($Querykota)) {
                                        ?>
                                            <option value="<?= $id_warnaBenih['id_warnaBenih']; ?>"><?= $id_warnaBenih['WarnaBenih']; ?></option>
                                        <?php } ?>
                      </select>
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

