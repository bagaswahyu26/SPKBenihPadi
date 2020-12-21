<?php
include "../../header.php";

?>

<?php
include "../../lib/koneksi.php";

$id_jenisPadi = $_GET['id_jenisPadi'];
$sql =  "SELECT * FROM tb_jenispadi WHERE id_jenisPadi = '$id_jenisPadi'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($result);

$JenisPadi = $data['JenisPadi'];
$id_bobotnilai = $data['id_bobotnilai'];

?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
   
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Form Edit Jenis Padi</h4>
                  <div class="card-header-action">
                    <a href="main.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">

                  <form action="aksi_edit.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                      <input type="hidden" name="id_jenisPadi" value="<?php echo $data['id_Padi']; ?>">
                        <label>Jenis Padi</label>
                        <input type="text" class="form-control" required="" name="JenisPadi" value="<?php echo $data['JenisPadi'] ?>">
                      </div>
                      <div class="form-group">
                      <label>Bobot</label>
                      <select class="form-control" name ="id_bobotnilai">
                        <option value>Pilih Bobot</option>
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
                        <input type="text" class="form-control" required="" name="nilai_jenispadi" value="<?php echo $data['nilai_jenispadi'] ?>">
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

