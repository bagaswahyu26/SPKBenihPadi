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
            <div class="col-md-10">
              <div class="card">
                <div class="card-header">
                  <h4>Nilai Kriteria dari Alternatif</h4>
                 
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Alternatif</th>
                        <th>Jenis Padi (C1)</th>
                        <th>Bulir Padi (C2)</th>
                        <th>Bentuk Padi (C3)</th>
                        <th>Kadar Air (C4)</th>
                        <th>Warna Benih (C5)</th>
                      </tr>
                      <?php
                            $sql = "SELECT * FROM tb_padi a , tb_jenispadi b, tb_bulirpadi c, tb_bentukpadi d, tb_kadarair e, tb_warnabenih f WHERE a.id_jenisPadi = b.id_jenisPadi AND a.id_bulirPadi = c.id_bulirPadi AND a.id_bentukPadi = d.id_bentukPadi AND a.id_kadarAir = e.id_kadarAir AND a.id_warnaBenih = f.id_warnaBenih";
                            $q = mysqli_query($koneksi, $sql);
                           // $data = mysqli_fetch_array($q);

                           
                        ?>
                        <?php
                       while($data = mysqli_fetch_array($q)){

                        ?>
                      <tr>
                        <td class="font-weight-600"><?php echo $data['NamaPadi']; ?></td>
                        <td class="font-weight-600"><?php echo $data['nilai_jenispadi']; ?></td>
                        <td class="font-weight-600"><?php echo $data['nilai_bulirpadi']; ?></td>
                        <td class="font-weight-600"><?php echo $data['nilai_bentukpadi']; ?></td>
                        <td class="font-weight-600"><?php echo $data['nilai_kadarair']; ?></td>
                        <td class="font-weight-600"><?php echo $data['nilai_warnabenih']; ?></td>
                        
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

