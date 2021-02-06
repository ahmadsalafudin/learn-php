<?php 
  $edit=$mysqli->query("select*from customers where id_c='$_GET[id]'");
  $e=mysqli_fetch_array($edit);
?>

<form name="form_mahasiwa" action="index.php?page=update" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="Nama">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required value="<?php echo $e['nama'];?>">
  </div>
 <div class="form-group">
    <label for="Email">Email</label>
    <input type="text" class="form-control" id="email" placeholder="Email" name="email" required value="<?php echo $e['email'];?>">
  </div>
 <div class="form-group">
    <label for="NoHP">No HP</label>
    <input type="text" class="form-control" id="nohp" placeholder="Nomor HP" name="nohp" required value="<?php echo $e['nohp'];?>">
  </div>
  <div class="form-group">
    <label for="Alamat">Alamat</label>
    <textarea class="form-control" id="alamat" placeholder="Alamat" name="alamat" required><?php echo $e['alamat'];?></textarea>
  </div>

  <div class="form-group">
    <label for="Gambar">Gambar</label>
    <input type="file" class="form-control" id="gambar" name="gambar">
    <span><?php echo $e['gambar'];?></span>
  </div>

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Update</button>
  </div>


</form>