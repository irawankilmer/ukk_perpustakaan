<?php include '../app/views/templates/header.php'; $no = 1; ?>
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal di Kembalikan</th>
                    <th>Status</th>
                    <th>Tindakan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data as $buku): ?>
                  	<tr>
                  		<td><?= $no; ?></td>
                  		<td><?= $buku['Judul']; ?></td>
                  		<td><?= $buku['TanggalPeminjaman']; ?></td>
                  		<td><?= $buku['TanggalPengembalian']; ?></td>
                  		<td><?= $buku['StatusPeminjaman']; ?></td>
                      <td>
                        <?php if($buku['StatusPeminjaman'] === 'Belum di Kembalikan'): ?>
                          <form action="<?= urlTo('/peminjaman/'.$buku['PeminjamanID'].'/kembalikan') ?>" method="post">
                          <input type="hidden" name="TanggalPengembalian" value="<?= date('Y-m-d'); ?>">
                          <input type="hidden" name="StatusPeminjaman" value="Sudah di Kembalikan">
                            <button class="btn btn-info">Kembalikan</button>
                          </form>
                        <?php endif ?>
                      </td>
                  	</tr>
                  	<?php $no++; ?>
                  <?php endforeach ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal di Kembalikan</th>
                    <th>Status</th>
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