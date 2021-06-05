<?php include ("../koneksi.php"); 
$query = mysqli_query($connection,"SELECT * FROM laporan");
?>
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">DATA RELAWAN COVID 19 DKI JAKARTA</h1>
                    <br><h1 class="h3 mb-4 text-gray-800">Per <?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "| Pukul : <b>". $jam." "."</b>"; ?></h1>
                    <a href="index.php?page=linsert" class="btn btn-primary mb-3">Tambah data relawan Covid</a>
                    <a href="subpages/export1.php" class="btn btn-secondary mb-3">Export PDF</a>

                 

                <div class="row">
                    <div class="col">
                    <table class="table table-sm table-striped" id="laporan">
                    <thead>
    <tr>
      <th scope="col">#</th>
      
      <th scope="col">Nama Lengkap</th>

      <th scope="col">Alamat</th>
      <th scope="col">Provinsi</th>
      <th scope="col">Email</th>
      <th scope="col">Nomor HP</th>
      <th scope="col">Keahlian</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 1;
            while($user = mysqli_fetch_assoc($query)){
        ?>
    <tr>
      <th scope="row"><?php echo $no++ ?></th>
      <td><?php echo $user["nama_lengkap"]; ?></td>
      <td><?php echo $user["alamat"];?></td>
      <td><?php echo $user["provinsi"];?></td>
      <td><?php echo $user["email"];?></td>
      <td><?php echo $user["no_hp"];?></td>
      <td><?php echo $user["keahlian"];?></td>
      
      <td>
      <div class="btn-group">
      <a href="subpages/ledit.php?id_laporan=<?= $user['id_laporan'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
      <td><a href="subpages/delp.php?id_laporan=<?= $user['id_laporan'] ?>" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></a></td>
      </div>
      </td>
      
    </tr>
    <?php } ?>
  </tbody>
</table>
                    </div>
                </div>
                

                </div>
