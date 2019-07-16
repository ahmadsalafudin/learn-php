<form name="form_mahasiwa" action="index.php?page=create" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="Nama">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required>
  </div>
   <div class="form-group">
    <label for="Email">Email</label>
    <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
  </div>
 <div class="form-group">
    <label for="NoHP">No HP</label>
    <input type="text" class="form-control" id="nohp" placeholder="Nomor HP" name="nohp" required>
  </div>

  <div class="form-group">
    <label for="Alamat">Alamat</label>
    <textarea class="form-control" id="alamat" placeholder="Alamat" name="alamat" required></textarea>
  </div>

  <div class="form-group">
    <label for="Gambar">Gambar</label>
    <input type="file" class="form-control" id="gambar" name="gambar" required>
  </div>

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>