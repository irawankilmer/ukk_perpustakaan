<?php 
class KategoribukuController extends Controller
{
  public function __construct()
  {
    /**
      * Batasi hak akses hanya untuk Administrator dan Petugas
      * Selain Administrator dan Petugas akan langsung diarahkan kembali ke halaman home
    */
    if ($_SESSION['role'] !== 'Administrator' && $_SESSION['role'] !== 'Petugas') {
      redirectTo('error', 'Mohon maaf, Anda tidak berhak mengakses halaman ini', '/');
    }
  }
  
  public function index()
  {
    $data = $this->model('Kategoribuku')->getAll();
    $this->view('kategoribuku/home', $data);
  }

  public function create()
  {
    $this->view('kategoribuku/create');
  }

  public function store()
  {
    if ($this->model('Kategoribuku')->create([
      'NamaKategori'  => $_POST['NamaKategori']
    ]) > 0) {
      redirectTo('success', 'Selamat, Data Kategori Berhasil di Tambahkan', '/kategoribuku');
    } else {
      redirectTo('danger', 'Maaf, Data Kategori gagal di Tambahkan', '/kategoribuku');
    }
  }

  public function edit($id)
  {
    $data = $this->model('KategoriBuku')->getById($id);
    $this->view('kategoribuku/edit', $data);
  }

  public function update($id)
  {
    if ($this->model('Kategoribuku')->update($id) > 0) {
      redirectTo('success', 'Selamat, Data Kategori Berhasil di Update', '/kategoribuku');
    } else {
      redirectTo('danger', 'Maaf, Data Kategori gagal di Update', '/kategoribuku');
    }
  }

  public function delete($id)
	{
		if ($this->model('Kategoribuku')->delete($id) > 0) {
			redirectTo('success', 'Selamat, Data Kategori berhasil di hapus!', '/kategoribuku');
		}
	}
}
