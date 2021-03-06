<?php
include "../../header.php";
?>

<?php
include "../../lib/koneksi.php";
?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
        <div class="row">

        <div class="col-lg-8 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title"><h5>Keterangan Bobot</h5>
                   
                  </div>
                  <div class="card-stats-items">
                    <div class="card-stats-item">
                    <div class="badge badge-secondary">1</div>
                    <div class="card-stats-item-label"></div>
                      <div class="badge badge-secondary">SJ</div>
                      <div class="card-stats-item-label">Sangat Jelek</div>
                    </div>
                    <div class="card-stats-item">
                    <div class="badge badge-primary">2</div>
                    <div class="card-stats-item-label"></div>
                      <div class="badge badge-primary">J</div>
                      <div class="card-stats-item-label">Jelek</div>
                    </div>
                    <div class="card-stats-item">
                    <div class="badge badge-info">3</div>
                    <div class="card-stats-item-label"></div>
                      <div class="badge badge-info">C</div>
                      <div class="card-stats-item-label">Cukup</div>
                    </div>
                    <div class="card-stats-item">
                    <div class="badge badge-warning">4</div>
                    <div class="card-stats-item-label"></div>
                      <div class="badge badge-warning">B</div>
                      <div class="card-stats-item-label">Baik</div>
                    </div>
                    <div class="card-stats-item">
                    <div class="badge badge-success">5</div>
                    <div class="card-stats-item-label"></div>
                      <div class="badge badge-success">SB</div>
                      <div class="card-stats-item-label">Sangat Baik</div>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  
                </div>
                <div class="card-wrap">
                  
                
                </div>
              </div>
            </div>
          </div>
        
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Kriteria Jenis Padi (C1)</h4>
                  <div class="card-header-action">
                    <a href="form_tambah.php" class="btn btn-danger">Tambah Jenis Padi <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>  ID</th>
                        <th>Jenis Padi</th>
                        <th>Bobot</th>
                        <th>Nilai</th>
                        <th>Action</th>
                      </tr>
                      <?php
                            $sql = "SELECT * FROM tb_bobotnilai b , tb_jenispadi j WHERE b.id_bobotnilai = j.id_bobotnilai ORDER BY id_jenisPadi";
                            $q = mysqli_query($koneksi, $sql);
                            //$data = mysqli_fetch_array($q);

                          

                        ?>
                        <?php
                       while($data = mysqli_fetch_array($q)){

                        ?>
                      <tr>
                        <td><?php echo $data['id_jenisPadi']; ?></td>
                        <td class="font-weight-600"><?php echo $data['JenisPadi']; ?></td>
                        
                        <td><div class="badge badge-warning"><?php echo $data['Bobot']; ?></td>
                        <td><div class="badge badge-warning"><?php echo $data['nilai_jenispadi']; ?></div></td>
                        <td>
                          <a href="form_edit.php?id_jenisPadi=<?= $data['id_jenisPadi']; ?>" class="btn btn-primary">Edit</a>
                          <a href="<?php echo $baseUrl; ?>pages/jenisPadi/hapus.php?id_jenisPadi=<?php echo $data['id_jenisPadi']; ?>" onclick="return confirm('Yakin Ingin menghaous')"" class="btn btn-danger">Hapus</a>
                        </td>
                      </tr>
                      <?php
                       }
                        ?>
          
                    </table>
                  </div>
                </div>
              </div>
            </div>

            
          </div>
        </section>
      </div>


<?php
include "../../footer.php";
?>

