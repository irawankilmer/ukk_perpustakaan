<?php 
class KoleksiController extends Controller
{
  public function __construct()
  {
    /**
      * Batasi hak akses hanya untuk peminjam
      * Selain peminjam akan langsung diarahkan kembali ke halaman home
    */
    if ($_SESSION['role'] !== 'Peminjam') {
      redirectTo('error', 'Mohon maaf, Anda tidak berhak mengakses halaman ini', '/');
    }
  }

  public function index()
  {
    $data = $this->model('Koleksi')->get();
    $this->view('koleksi/home', $data);
  }

  public function store() 
  {
    if ($this->model('Koleksi')->create([
      'UserID'  => $_POST['UserID'],
      'BukuID'  => $_POST['BukuID']
    ]) > 0) {
      redirectTo('success', 'Selamat, Buku berhasil di tambahkan ke koleksi', '/koleksi');
    } else {
      redirectTo('error', 'Maaf, Buku gagal di tambahkan ke koleksi', '/perpustakaan');
    }
  }

  public function delete($id)
	{
		if ($this->model('Koleksi')->delete($id) > 0) {
			redirectTo('success', 'Selamat, Buku berhasil di hapus dari koleksi!', '/koleksi');
		}
	}
}
