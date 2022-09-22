<?php
include('config.php');

// var_dump($_SESSION);
?>

<!-- TABELNYA -->
          
 <div class="container">
  
          <div class="ms-auto">
            
            <button type="button" class="btn btn-primary mb-4 mt-4" data-bs-toggle="modal" data-bs-target="#modal-tambah">
              <span><i class="fa fa-plus"></i></span>
              Tambah Data
            </button>
          </div>
     
          <input type="search" name="" placeholder="Cari..." class="form-control light-table-filter mt-3" data-table="table-hover">
          <table class="table table-hover table-bordered table-info table-striped bordered-dark mt-4 text-center">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal lahir</th>
                <th scope="col">NIM</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            
            <tbody>
              <?php
              $ambil = mysqli_query($db, "SELECT * FROM mahasiswa, jurusan WHERE mahasiswa.id_jurusan = jurusan.id_jurusan");
              WHILE($data = mysqli_fetch_array($ambil)){
              ?>
              <tr>
                <td><?= $data['id_mahasiswa'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['tgl_lahir'] ?></td>
                <td><?= $data['nim'] ?></td>
                <td><?= $data['jurusan'] ?></td>
                <td><img src="foto/<?= $data['foto'] ?>" class="img-thumbnail" alt="" style="width : 100px;"></td>
                <td colspan="2">
                  <a onclick="hapus_data(<?php echo $data['id_mahasiswa']; ?>)" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                    |
                    <a href="isidata.php?page=edit_data&& id_mahasiswa=<?php echo $data['id_mahasiswa']; ?>" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                  </td>
              </tr>

              <?php
    }
    ?>


  <!-- MODALNYA TAMBAH -->
  <div class="modal fade" id="modal-tambah" tabindex="-1" aria-labelledby="modal-tambahLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-tambahLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Mahasiswa Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="create.php" enctype="multipart/form-data">
                <div class="card-body">
                  <!-- NAMA -->
                  <div class="form-group">
                    <label for="inputnamamahasiswa">Nama Mahasiswa</label>
                    <input onInput="getnama(this)" type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama" id="nama" value="" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="p-nama" id="p-nama" value="" disabled>
                  </div>

                  <!-- tanggal lahir -->
                  <div class="form-group">
                    <label for="inputtanggallahir">Tanggal Lahir</label>
                    <input onInput="gettgl(this)" type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" id="tgl_lahir" required>
                  </div>
                  <div class="form-group">
                    
                    <input type="date" class="form-control" placeholder="Tanggal Lahir" name="p-tgl" id="p-tgl" disabled>
                  </div>

                  <!-- NIM -->
                  <div class="form-group">
                    <label for="inputnim">NIM</label>
                    <input onInput="getnim(this)" type="number" class="form-control" placeholder="NIM" name="nim" id="nim">
                  </div>
                  <div class="form-group">
                   
                    <input type="number" class="form-control" placeholder="NIM" name="p-nim" id="p-nim" disabled>
                  </div>

                  <!-- Jurusan -->
                  <div class="form-group">
                    <label for="inputjurusan">Jurusan</label>
                    <select onInput="getjur(this)" name="id_jurusan" id="id_jurusan" class="form-control select2" style="width: 100%;" name="id_jurusan">
                      <option>---</option>
                      <?php 
                      include "config.php";
                      $tarik = mysqli_query($db, "SELECT * FROM jurusan");
                      WHILE($berkas = mysqli_fetch_array($tarik)){
                        echo "<option value=$berkas[id_jurusan]> $berkas[jurusan] </option>";
                      }
                      ?>
                      </select>
                      <div class="form-group">
                        
                        <input type="text" class="form-control" placeholder="Jurusan" name="p-jur" id="p-jur" disabled>
                      </div>

                      <!-- Foto -->
                    <div class="form-group">
                      <label for="inputfoto">Foto</label>
                      <input type="file" class="form-control" placeholder="foto" id= "image-source" onchange="previewImage();" name="foto" />
                      <img id="image-preview" style="display:none; width:350px; height: 350px;" alt="image preview"/>
                    </div>
                  </div>
                                 
                  <!-- /.card-body -->

                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="proses">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>


        
       