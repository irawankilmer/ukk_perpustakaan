<?php 
class PerpustakaanController extends Controller
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
    $data = $this->model('KBRelasi')->get();
    $this->view('perpustakaan/home', $data);
  }

  public function detailbuku($id)
  {
    $this->view('perpustakaan/buku', [
      'buku'    => $this->model('Buku')->getById($id),
      'ulasan'  => $this->model('UlasanBuku')->getByBookID($id)
    ]);
  }

  public function ulasanbuku($id)
  {
    $data = $this->model('Buku')->getById($id);
    $this->view('perpustakaan/ulasan', $data);
  }

  public function ulasanstore()
  {
    if ($this->model('Ulasanbuku')->create([
      'UserID'      => $_POST['UserID'],
      'BukuID'      => $_POST['BukuID'],
      'Ulasan'      => $_POST['Ulasan'],
      'Rating'      => $_POST['Rating'],
    ]) > 0) {
      redirectTo('success', 'Selamat, Ulasan Berhasil di Tambahkan', '/perpustakaan/'.$_POST['BukuID'].'/detailbuku');
    } else {
      redirectTo('error', 'Maaf, Ulasan gagal di Tambahkan', '/perpustakaan/'.$_POST['BukuID'].'/detailbuku');
    }
  }
}
