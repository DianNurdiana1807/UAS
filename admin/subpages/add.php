<?php
// include database connection file
include_once("../../koneksi.php");
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['submit'])) {
		$nama_lengkap = $_POST['nama_lengkap'];
		$alamat = $_POST['alamat'];
		$provinsi = $_POST['provinsi'];
		$email = $_POST['email'];
		$no_hp = $_POST['no_hp'];
		$keahlian = $_POST['keahlian'];
		

		
		
				
		// Insert user data into table
		$result = mysqli_query($connection, "INSERT INTO laporan (id_laporan,nama_lengkap,alamat,provinsi,email,no_hp,keahlian) VALUES('','$nama_lengkap','$alamat','$provinsi','$email','$no_hp','$keahlian')");
		
        if ($result) {
            // pesan jika data tersimpan
            echo "<script>alert('Data Covid berhasil ditambahkan'); window.location.href='../index.php?page=laporan'</script>";
          } else {
            // pesan jika data gagal disimpan
            echo "<script>alert('Data Covid gagal ditambahkan'); window.location.href='../index.php?page=laporan'</script>";
          }
        } else {
            // jika coba akses langsung halaman ini akan diredirect ke halaman index
            header('Location: ../index.php?page=laporan');
	}
	?>