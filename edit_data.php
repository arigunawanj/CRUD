<?php
$id = $_GET['id_mahasiswa'];
$sql = mysqli_query($db,"SELECT * FROM mahasiswa, jurusan WHERE mahasiswa.id_jurusan = jurusan.id_jurusan and id_mahasiswa='$_GET[id_mahasiswa]'");
$data = mysqli_fetch_array($sql);
?>

<section class= "content">
    <div class="container-fluid mb-6">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Mahasiswa</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <form method='post' action='update_data.php' enctype="multipart/form-data">
                  <div class="row mb-3">
                    <div class="col-sm-6">

                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input type="text" class="form-control" placeholder="Nama Mahasiswa" name='nama' value="<?php echo $data['nama'];?>">
                        <input type="hidden" class="form-control" placeholder="id mahasiswa" name='id_mahasiswa' value="<?php echo $data['id_mahasiswa'];?>" hidden>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" placeholder="Tanggal Lahir" name='tgl_lahir' value="<?php echo $data['tgl_lahir'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>NIM</label>
                        <input type="text" class="form-control" placeholder="NIM" name='nim' value="<?php echo $data['nim'];?>">
                      </div>
                    </div>
                  
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Jurusan</label>
                        <select class="form-control" style="width: 100%;" name="id_jurusan">
                        <!-- <option value = "<?php echo $data['jurusan'];?>" selected><?php echo $data['jurusan'];?></option> -->
                        <?php 
                              // echo "<option value =$data[id_jurusan]>$data[jurusan]</option>";
                    
                              $qj = mysqli_query($db, "SELECT * FROM jurusan");
                              WHILE($jurusan = mysqli_fetch_array($qj)){
                                echo "<option value='" . $jurusan['id_jurusan']."'>".$jurusan['jurusan']."</option>";
                              }
                              ?>
                        </select>
                        <div class="row">
                          <div class="col-sm-6">
                            <label for="inputfoto">Foto</label>
                            <input type="file" class="form-control" placeholder="Foto" name="foto">
                            <br><br>
                            <?php 
                            // var_dump($data);die;
                                if ($data['foto'] == null) { ?>
                                  <img src="https://via.placeholder.com/500x500.png?text=PAS+FOTO+SISWA" style="width:100px;height:100px;">
                                <?php }else{ ?>
                                  <img src="foto/<?php echo $data['foto']; ?>" style="width:100px;">
                                <?php } ?>
                                <button type = "submit"  name ="proses" class="btn btn-md btn-info text-center">Simpan</button>
                          </div>
                          </div>
                      </div>
                    </div>
                </div>
                <div class = "text-center">
                  <br>
                </div>
              </form>
              </div>
              <!-- /.card-body -->
        </div>
    </div>
</section>