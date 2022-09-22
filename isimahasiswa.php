<?php
include('config.php');

// var_dump($_SESSION);
?>

<!-- TABELNYA -->
          
 <div class="container">
  
          
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
                
              </tr>

              <?php
    }
    ?>


