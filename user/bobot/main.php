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
                        <th>ALTERNATIF</th>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                        <th>C5</th>
                        <th>HASIL</th>
                    
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
                        <td align="center" class="font-weight-600"><?php echo $data['NamaPadi']; ?></td>
                        <td class="font-weight-600"><?php echo $data['nilai_jenispadi']/5; ?></td>
                        <td class="font-weight-600"><?php echo $data['nilai_bulirpadi']/5; ?></td>
                        <td class="font-weight-600"><?php echo $data['nilai_bentukpadi']/5; ?></td>
                        <td class="font-weight-600"><?php echo $data['nilai_kadarair']/5; ?></td>
                        <td class="font-weight-600"><?php echo $data['nilai_warnabenih']/5; ?></td>
                        <td class="font-weight-600"><?php echo ($data['nilai_jenispadi']/4)*20 + ($data['nilai_bulirpadi']/4)*30+($data['nilai_bentukpadi']/4)*25+($data['nilai_kadarair']/4)*10 +($data['nilai_warnabenih']/4)*15 ; ?></td>
                      </tr>
                      
                      <?php
                       }
                        ?>
                         <tr>
                        <th>Nilai Maks</th>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                        <th>C5</th>
                      </tr>
          
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

