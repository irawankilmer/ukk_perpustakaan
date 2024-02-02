<?php include '../app/views/templates/header.php'; $no = 1; ?>
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="<?= urlTo('/user/create'); ?>" class="btn btn-primary float-right">Tambah Data Petugas</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Role</th>
                    <th>Tindakan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data as $user): ?>
                  	<tr>
                  		<td><?= $no; ?></td>
                  		<td><?= $user['NamaLengkap']; ?></td>
                  		<td><?= $user['Email']; ?></td>
                  		<td><?= $user['Alamat']; ?></td>
                  		<td><?= $user['Role']; ?></td>
                  		<td>
                  			<?php if($user['Role'] === 'Petugas'): ?>
                          <a href="<?= urlTo('/user/'.$user['UserID'].'/edit') ?>" class="btn btn-warning">
                            Edit
                          </a>
                  			<?php endif ?>
                  			
                        <?php if($user['Role'] !== 'Administrator'): ?>
                          <a href="<?= urlTo('/user/'.$user['UserID'].'/delete') ?>" class="btn btn-danger">
                            Delete
                          </a>
                  			<?php endif ?>
                  		</td>
                  	</tr>
                  	<?php $no++; ?>
                  <?php endforeach ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Role</th>
                    <th>Tindakan</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
<?php include '../app/views/templates/footer.php'; ?>