<?php
include "../../header.php";

?>

<?php
include "../../lib/koneksi.php";

$id_bulirPadi = $_GET['id_bulirPadi'];

$sql =  "SELECT * FROM tb_bulirPadi WHERE id_bulirPadi = '$id_bulirPadi'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($result);

$NamaBulir = $data['NamaBulir'];
$id_bobotnilai = $data['id_bobotnilai'];

?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
   
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Form Edit Bulir Padi</h4>
                  <div class="card-header-action">
                    <a href="main.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">

                  <form action="aksi_edit_bulir.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                      <input type="hidden" name="id_bulirPadi" value="<?php echo $data['id_bulirPadi']; ?>">
                        <label>Jenis Bulir Padi</label>
                        <input type="text" class="form-control" required="" name="NamaBulir" value="<?php echo $data['NamaBulir'] ?>">
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
                        <input type="text" class="form-control" required="" name="nilai_bulirpadi" value="<?php echo $data['nilai_bulirpadi'] ?>">
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

