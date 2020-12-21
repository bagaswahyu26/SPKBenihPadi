<?php
include "../../header.php";
?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
        <?php
         $sql = mysqli_query($koneksi, "SELECT * FROM tb_kriteria");
         $q = mysqli_num_rows($sql);

         $sq = mysqli_query($koneksi, "SELECT * FROM tb_bobotnilai");
         $o = mysqli_num_rows($sq);
       
         //sum
           $qry = mysqli_query($koneksi, "SELECT SUM(Bobot) as jumlah from tb_kriteria");
          $data = mysqli_fetch_array($qry);

          $qr = mysqli_query($koneksi, "SELECT SUM(Nilai) as jumlah from tb_bobotnilai");
          $databobot = mysqli_fetch_array($qr);

         ?>

        <div class="row">
            <div class="col-lg-4   col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">Kriteria Statistics
                   
                  </div>
                  <div class="card-stats-items">
                    <div class="card-stats-item">
                      <div class="card-stats-item-count"><?php echo $q; ?></div>
                      <div class="card-stats-item-label">Kriteria</div>
                    </div>
                    
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Nilai Bobot</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $data['jumlah']; ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">Bobot Nilai Statistics
                   
                  </div>
                  <div class="card-stats-items">
                    <div class="card-stats-item">
                      <div class="card-stats-item-count"><?php echo $o; ?></div>
                      <div class="card-stats-item-label">Bobot</div>
                    </div>
                    
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Nilai Bobot</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $databobot['jumlah']; ?>
                  </div>
                </div>
              </div>
            </div>


          </div>

          
          

          <div class="row">
            <div class="col-md-11">
              <div class="card">
                <div class="card-header">
                  <h4>Kriteria Penilaian</h4>
                  <div class="card-header-action">
                    <a href="form_tambah_kriteria.php" class="btn btn-danger">Tambah Kategori <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">

                        <?php
                            $sql = "SELECT * FROM tb_kriteria";
                            $q = mysqli_query($koneksi, $sql);
                            //$data = mysqli_fetch_array($q);

                        ?>
                    <table class="table table-striped">
                      <tr>
                        <th>Kriteri ID</th>
                        <th>Jenis Kriteria</th>
                        <th>Bobot Penilaian</th>
                        <th>Action</th>
                      </tr>
                       <?php
                       while($data = mysqli_fetch_array($q)){

                        ?>
                      <tr>
                        <td><?php echo $data['idKriteria']; ?></a></td>
                        <td class="font-weight-600"><?php echo $data['NamaKriteria']; ?></td>
                        <td><div class="badge badge-warning"><?php echo $data['Bobot']; ?></div></td>
                        <td>
                        
                          <a href="form_edit_kriteria.php?idKriteria=<?= $data['idKriteria']; ?>" class="btn btn-primary">Edit</a>
                          <a href="<?php echo $baseUrl; ?>pages/kategori/hapus_kriteria.php?idKriteria=<?php echo $data['idKriteria']; ?>" onclick="return confirm('Yakin Ingin menghaous')" class="btn btn-danger">Hapus</a>
                          
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

          <div class="row">
            <div class="col-md-11">
              <div class="card">
                <div class="card-header">
                  <h4>Bobot Nilai</h4>
                  <div class="card-header-action">
                    <a href="form_tambah_bobot.php" class="btn btn-danger">Tambah Bobot  <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">

                        <?php
                            $sql = "SELECT * FROM tb_bobotnilai";
                            $q = mysqli_query($koneksi, $sql);
                            //$data = mysqli_fetch_array($q);

                        ?>
                    <table class="table table-striped">
                      <tr>
                        <th>Bobot ID</th>
                        <th>Bobot</th>
                        <th>Keterangan</th>
                        <th>Nilai</th>
                        <th>Action</th>
                      </tr>
                       <?php
                       while($data = mysqli_fetch_array($q)){

                        ?>
                      <tr>
                        <td><?php echo $data['id_bobotnilai']; ?></a></td>
                        <td class="font-weight-600"><?php echo $data['Bobot']; ?></td>
                        <td class="font-weight-600"><?php echo $data['Keterangan']; ?></td>
                        <td><div class="badge badge-warning"><?php echo $data['Nilai']; ?></div></td>
                        <td>
                          <a href="form_edit_bobot.php?id_bobotnilai=<?= $data['id_bobotnilai']; ?>" class="btn btn-primary">Edit</a>
                          <a href="<?php echo $baseUrl; ?>pages/kategori/hapus_bobot.php?id_bobotnilai=<?php echo $data['id_bobotnilai']; ?>" onclick="return confirm('Yakin Ingin menghapus')" class="btn btn-danger">Hapus</a>
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

