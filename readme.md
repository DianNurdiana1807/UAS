
# Kelompok 2 06TPLE012

### hostingan kami sekelompok patungan ,karena hostingan gratisan banyak errornya , link web : <a href="http://kelompokdua06tple012.com/">kelompok2</a>
<hr>


Fungsi PHP 

```
Koneksi.php
Berfungsi Untuk  menghubungkan project dengan database
```
` $connection = mysqli_connect($servername, $username, $password, $dbname); `
```
cek_login.php
Berfungsi untuk mengecek inputan yang kita masukan pada saat login,dan untuk meroute.
```
` $login = mysqli_query($koneksi,"select * from users where username='$username' and password='$password'");`

```
logout.php
Berfungsi untuk log out dari app dan menghapus session
```
`session_destroy();`

Di dalam index.php ada fungsi untuk membuat session 
`session_start();`

``` 
admin\index.php
Sebagai page utama yang akan memuat subpages,
```
`
					<?php
						if (isset($_GET['page']))
							$page = $_GET['page'];
						else
							$page = 'laporan';
						if (preg_match('/^[a-z0-9\-]+$/', $page))
						{
							$inserted = include('subpages/' . $page . '.php');
							if (!$inserted)
								echo('Requested page was not found.');
						}
						else
							echo('Invalid parameter.');
					?>
				`
                
Ini source code untuk subpagesnya


``` 
subpages\add.php
Berfungsi sebagai code untuk input data ke database
```
`mysqli_query($connection, "INSERT INTO laporan (id_laporan,nama_lengkap,alamat,provinsi,email,no_hp,keahlian) VALUES('','$nama_lengkap','$alamat','$provinsi','$email','$no_hp','$keahlian')");`

```
delp.php
Berfungsi untuk menghapus record dari database berdasarkan ID yang dipilih
```
`DELETE FROM laporan WHERE id_laporan = '$id_laporan'`

````
editp.php
Berungsi untuk mengubah data berdasarkan ID yang dipilih

````
`UPDATE laporan SET nama_lengkap = '$nama_lengkap', alamat = '$alamat', provinsi = '$provinsi', email = '$email', no_hp = '$no_hp', keahlian = '$keahlian' WHERE id_laporan = '$id_laporan'");`

```
export1.php
Berfungsi untuk membuat laporan berformat PDF dengan menggunakan plugin fpdf
```