<?php include '../app/views/templates/header.php'; ?>
<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-body">
      <form action="<?= urlTo('/user/'.$data['UserID'].'/update'); ?>" method="post">
        <div class="form-group">
          <label for="Username">Username</label>
          <input type="text" id="Username" name="Username" class="form-control" value="<?= $data['Username']; ?>" readonly>
        </div>
        
        <div class="form-group">
          <label for="Email">Email</label>
          <input type="email" id="Email" name="Email" class="form-control" value="<?= $data['Email']; ?>" required>
        </div>
        
        <div class="form-group">
          <label for="NamaLengkap">NamaLengkap</label>
          <input type="text" id="NamaLengkap" name="NamaLengkap" class="form-control" value="<?= $data['NamaLengkap']; ?>" required>
        </div>
        
        <div class="form-group">
          <label for="Alamat">Alamat</label>
          <input type="text" id="Alamat" name="Alamat" class="form-control" value="<?= $data['Alamat']; ?>" required>
        </div>

        <div class="form-group">
          <a href="<?= urlTo('/user'); ?>" class="btn btn-danger">Batal</a>
          <button type="submit" class="btn btn-primary float-right">Edit Data</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include '../app/views/templates/footer.php'; ?>