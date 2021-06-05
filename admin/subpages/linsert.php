
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
        <h2> Form Tambah Data Covid</h2>
        
        <form action="subpages/add.php" method="POST">
        

        
    <div class="row mb-3">
    <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  id="nama_lengkap" name="nama_lengkap" autofocus>
      
    </div>
  </div>
  <div class="row mb-3">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="alamat" name="alamat">
    </div>
  </div>
  <div class="row mb-3">
    <label for="provinsi" class="col-sm-2 col-form-label">provinsi</label>
    <div class="col-sm-10">
    <select name="provinsi" class="form-control" id="provinsi">
        <option value="Jawa Barat" selected>Jawa Barat</option>
        <option value="Jawa Tengah">Jawa Tengah</option>
        <option value="Jawa Timur">Jawa Timur</option>
        <option value="Yogyakarta">Yogyakarta</option>
        <option value="Banten">Banten</option>
        <option value="DKI Jakarta">DKI Jakarta</option>
        <option value="Madura">Madura</option>
        <option value="Bali">Bali</option>
        
    </select>
    </div>
  </div>
  <div class="row mb-3">
    <label for="email" class="col-sm-2 col-form-label">email </label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email">
    </div>
  </div>
  <div class="row mb-3">
    <label for="no_hp" class="col-sm-2 col-form-label">Nomor HP </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="no_hp" name="no_hp">
    </div>
  </div>
  <div class="row mb-3">
    <label for="keahlian" class="col-sm-2 col-form-label">Keahlian </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="keahlian" name="keahlian">
    </div>
  </div>
  </div>
  </div>
  
  
  <button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>
</form>
        </div>

