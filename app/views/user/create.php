<?php include '../app/views/templates/header.php'; ?>
<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-body">
      <form action="<?= urlTo('/user/store'); ?>" method="post">
        <div class="form-group">
          <label for="Username">Username</label>
          <input type="text" id="Username" name="Username" class="form-control" required>
        </div>
        
        <div class="form-group">
          <label for="Email">Email</label>
          <input type="email" id="Email" name="Email" class="form-control" required>
        </div>
        
        <div class="form-group">
          <label for="NamaLengkap">NamaLengkap</label>
          <input type="text" id="NamaLengkap" name="NamaLengkap" class="form-control" required>
        </div>
        
        <div class="form-group">
          <label for="Alamat">Alamat</label>
          <input type="text" id="Alamat" name="Alamat" class="form-control" required>
        </div>
        
        <div class="form-group">
          <label for="Password">Password</label>
          <input type="password" id="Password" name="Password" class="form-control" required>
        </div>
        
        <div class="form-group">
          <label for="Konfirmasi_Password">Konfirmasi Password</label>
          <input type="password" id="Konfirmasi_Password" name="Konfirmasi_Password" class="form-control" required>
        </div>

        <div class="form-group">
          <a href="<?= urlTo('/user'); ?>" class="btn btn-danger">Batal</a>
          <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include '../app/views/templates/footer.php'; ?>