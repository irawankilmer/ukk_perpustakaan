<?php 
class LoginController extends Controller
{
  public function index()
  {
    $this->view('login');
  }

  public function login()
	{
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];
		$data 	  = $this->model('User')->getByUsername($Username);

		// periksa ketersediaan username
		if (!empty($data)) {
			// Periksa kecocokan password
			if (password_verify($Password, $data['Password'])) {
				$_SESSION['login']		= true;
				$_SESSION['username']	= $data['Username'];
				$_SESSION['role']		  = $data['Role'];
				$_SESSION['UserID']	  = $data['UserID'];
				redirectTo('success', 'Selamat datang kembali!', '/');
			} else {
				redirectTo('error', 'Maaf, Password salah!', '/login');
			}
		} else {
			redirectTo('error', 'Maaf, Username tidak terdafat!', '/login');
		}
	}

  public function register()
  {
    $this->view('register');
  }

  public function registers()
  {
    if ($_POST['Password'] !== $_POST['PasswordConfirm']) {
      redirectTo('error', 'Maaf, Konfirmasi password tidak cocok!', '/login/register');
    } else {
      if ($this->model('User')->create([
        'Username'      => $_POST['Username'],
        'Email'         => $_POST['Email'],
        'NamaLengkap'   => $_POST['NamaLengkap'],
        'Alamat'        => $_POST['Alamat'],
        'Password'      => password_hash($_POST['Password'], PASSWORD_DEFAULT),
        'Role'          => 3
      ]) > 0) {
        redirectTo('success', 'Selamat, Registrasi berhasil', '/login/register');
      } else {
        redirectTo('error', 'Maaf, Username/Email sudah terdaftar', '/login/register');
      }
    }
  }

  public function logout()
	{
		session_destroy();
		session_unset();
		redirectTo('success', 'Selamat, Anda berhasil logout!', '/login');
	}
}