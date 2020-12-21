<?php
include "../../header.php";

?>

<?php
include "../../lib/koneksi.php";

$id_kadarAir = $_GET['id_kadarAir'];

$sql =  "SELECT * FROM tb_kadarair WHERE id_kadarAir = '$id_kadarAir'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($result);

$KadarAir = $data['KadarAir'];
$id_bobotnilai = $data['id_bobotnilai'];

?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
   
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Form Edit Kadar Air</h4>
                  <div class="card-header-action">
                    <a href="main.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">

                  <form action="aksi_edit.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                      <input type="hidden" name="id_kadarAir" value="<?php echo $data['id_kadarAir']; ?>">
                        <label>Kadar Air</label>
                        <input type="text" class="form-control" required="" name="KadarAir" value="<?php echo $data['KadarAir'] ?>">
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
                        <input type="text" class="form-control" required="" name="nilai_kadarair" value="<?php echo $data['nilai_kadarair'] ?>">
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

