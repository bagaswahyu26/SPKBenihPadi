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
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Kriteria Warna Benih (C5)</h4>
                  <div class="card-header-action">
                    <a href="form_tambah.php" class="btn btn-danger">Tambah Warna Benihs <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>  ID</th>
                        <th>Warna Benih</th>
                        <th>Bobot</th>
                        <th>Nilai</th>
                        <th>Action</th>
                      </tr>
                      <?php
                            $sql = "SELECT * FROM tb_bobotnilai b ,  tb_warnabenih j WHERE b.id_bobotnilai = j.id_bobotnilai ORDER BY id_warnaBenih";
                            $q = mysqli_query($koneksi, $sql);
                           // $data = mysqli_fetch_array($q);

                          

                        ?>
                        <?php
                       while($data = mysqli_fetch_array($q)){

                        ?>
                      <tr>
                        <td><?php echo $data['id_warnaBenih']; ?></td>
                        <td class="font-weight-600"><?php echo $data['WarnaBenih']; ?></td>
                        
                        <td><div class="badge badge-warning"><?php echo $data['Bobot']; ?></td>
                        <td><div class="badge badge-warning"><?php echo $data['nilai_warnabenih']; ?></div></td>
                        <td>
                          <a href="form_edit.php?id_warnaBenih=<?= $data['id_warnaBenih']; ?>" class="btn btn-primary">Edit</a>
                          <a href="<?php echo $baseUrl; ?>pages/Warnabenih/hapus.php?id_warnaBenih=<?php echo $data['id_warnaBenih']; ?>" onclick="return confirm('Yakin Ingin menghaous')"" class="btn btn-danger">Hapus</a>
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

