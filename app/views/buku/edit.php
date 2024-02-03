<?php include '../app/views/templates/header.php'; ?>
<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-body">
      <form action="<?= urlTo('/buku/'.$data['BukuID'].'/update'); ?>" method="post">
        <div class="form-group">
          <label for="Judul">Judul</label>
          <input type="text" id="Judul" name="Judul" class="form-control"
          value="<?= $data['Judul']; ?>" required>
        </div>
        
        <div class="form-group">
          <label for="Penulis">Penulis</label>
          <input type="text" id="Penulis" name="Penulis" class="form-control"
          value="<?= $data['Penulis']; ?>" required>
        </div>
        
        <div class="form-group">
          <label for="Penerbit">Penerbit</label>
          <input type="text" id="Penerbit" name="Penerbit" class="form-control"
          value="<?= $data['Penerbit']; ?>" required>
        </div>
        
        <div class="form-group">
          <label for="TahunTerbit">TahunTerbit</label>
          <input type="number" id="TahunTerbit" name="TahunTerbit" class="form-control"
          value="<?= $data['TahunTerbit']; ?>" required>
        </div>
      
        <div class="form-group">
          <a href="<?= urlTo('/buku'); ?>" class="btn btn-danger">Batal</a>
          <button type="submit" class="btn btn-primary float-right">Edit Data</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include '../app/views/templates/footer.php'; ?>