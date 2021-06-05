<?php

require_once '../../koneksi.php';

if (isset($_POST['submit'])) {
  $id_laporan = $_POST['id_laporan'];
  $nama_lengkap = $_POST['nama_lengkap'];
		$alamat = $_POST['alamat'];
		$provinsi = $_POST['provinsi'];
		$email = $_POST['email'];
		$no_hp = $_POST['no_hp'];
		$keahlian = $_POST['keahlian'];
  // update data berdasarkan id_produk yg dikirimkan
  $q = mysqli_query($connection,"UPDATE laporan SET nama_lengkap = '$nama_lengkap', alamat = '$alamat', provinsi = '$provinsi', email = '$email', no_hp = '$no_hp', keahlian = '$keahlian' WHERE id_laporan = '$id_laporan'");

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data  berhasil diubah'); window.location.href='../index.php?page=laporan'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data  gagal diubah'); window.location.href='../index.php?page=laporan'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: ../index.php?page=laporan');
}