<?php

require_once '../../koneksi.php';

// cek id
if (isset($_GET['id_laporan'])) {
  $id_laporan = $_GET['id_laporan'];

  // perintah hapus data berdasarkan id yang dikirimkan
  $q = mysqli_query($connection,"DELETE FROM laporan WHERE id_laporan = '$id_laporan'");

  // cek perintah
  if ($q) {
    // pesan apabila hapus berhasil
    echo "<script>alert('Data berhasil dihapus'); window.location.href='../index.php?page=laporan'</script>";
  } else {
      // pesan apabila hapus gagal
      echo "<script>alert('Data gagal dihapus'); window.location.href='../index.php?page=laporan'</script>";
  }
}else {
    // jika coba akses langsung halaman ini akan diredirect ke halaman index
    header('Location: ../index.php?page=laporan');
}
