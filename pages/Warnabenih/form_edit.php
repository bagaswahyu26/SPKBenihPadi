<?php
include "../../header.php";

?>

<?php
include "../../lib/koneksi.php";

$id_warnaBenih = $_GET['id_warnaBenih'];

$sql =  "SELECT * FROM tb_warnabenih WHERE id_warnaBenih = '$id_warnaBenih'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($result);

$WarnaBenih = $data['WarnaBenih'];
$id_bobotnilai = $data['id_bobotnilai'];

?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
   
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Form Edit Warna Benih</h4>
                  <div class="card-header-action">
                    <a href="main.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">

                  <form action="aksi_edit.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                      <input type="hidden" name="id_warnaBenih" value="<?php echo $data['id_warnaBenih']; ?>">
                        <label>Warna Benih</label>
                        <input type="text" class="form-control" required="" name="WarnaBenih" value="<?php echo $data['WarnaBenih'] ?>">
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
                        <input type="text" class="form-control" required="" name="nilai_warnabenih" value="<?php echo $data['nilai_warnabenih'] ?>">
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

