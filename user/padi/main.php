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
                      <div class="badge badge-secondary">SJ</div>
                      <div class="card-stats-item-label">Sangat Jelek</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="badge badge-primary">J</div>
                      <div class="card-stats-item-label">Jelek</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="badge badge-info">C</div>
                      <div class="card-stats-item-label">Cukup</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="badge badge-warning">B</div>
                      <div class="card-stats-item-label">Baik</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="badge badge-success">SB</div>
                      <div class="card-stats-item-label">Sangat Baik</div>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Orders</h4>
                  </div>
                  <div class="card-body">
                    59
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Alternatif Padi Anda</h4>
                  <div class="card-header-action">
                    <a href="form_tambah.php" class="btn btn-danger">Tambah Alternatif Padi <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                      <th>  ID</th>
                        <th>Nama Padi (Alternatif)</th>
                        <th>Jenis Padi (C1)</th>
                        <th>Bulir Padi (C2)</th>
                        <th>Bentuk Padi (C3)</th>
                        <th>Kadar Air (C4)</th>
                        <th>Warna benih (C5)</th>
                        <th>Action</th>
                      </tr>
                      <?php
                            $sql = "SELECT * FROM tb_padi a , tb_jenispadi b, tb_bulirpadi c, tb_bentukpadi d, tb_kadarair e, tb_warnabenih f WHERE a.id_jenisPadi = b.id_jenisPadi AND a.id_bulirPadi = c.id_bulirPadi AND a.id_bentukPadi = d.id_bentukPadi AND a.id_kadarAir = e.id_kadarAir AND a.id_warnaBenih = f.id_warnaBenih";
                            $q = mysqli_query($koneksi, $sql);
                            //$data = mysqli_fetch_array($q);


                        ?>
                        <?php
                       while($data = mysqli_fetch_array($q)){

                        ?>
                      <tr>
                        <td><?php echo $data['id_padi']; ?></td>
                        <td class="font-weight-600"><?php echo $data['NamaPadi']; ?></td>
                        <td class="font-weight-600"><?php echo $data['JenisPadi']; ?></td>
                        <td class="font-weight-600"><?php echo $data['NamaBulir']; ?></td>
                        <td class="font-weight-600"><?php echo $data['BentukPadi']; ?></td>
                        <td class="font-weight-600"><?php echo $data['KadarAir']; ?></td>
                        <td class="font-weight-600"><?php echo $data['WarnaBenih']; ?></td>
                        <td>
                          <a href="form_edit.php?id_padi=<?= $data['id_padi']; ?>" class="btn btn-primary">E</a>
                          <a href="<?php echo $baseUrl; ?>user/padi/hapus.php?id_padi=<?php echo $data['id_padi']; ?>" onclick="return confirm('Yakin Ingin menghaous')"" class="btn btn-danger">H</a>
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

