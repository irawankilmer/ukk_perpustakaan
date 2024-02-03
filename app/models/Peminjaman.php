<?php 
class Peminjaman extends BaseModel
{
  public $table_name    = "peminjaman";
  public $table_id      = "PeminjamanID";

  public function getPinjam()
  {
    $id = $_SESSION['UserID'];
    $result = $this->mysqli->query("
      SELECT * FROM peminjaman
      INNER JOIN users ON peminjaman.UserID = users.UserID
      INNER JOIN buku ON peminjaman.BukuID = buku.BukuID
      WHERE peminjaman.UserID = $id
    ");

    $data = [];
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;
  }

  public function get()
  {
    $id = $_SESSION['UserID'];
    $result = $this->mysqli->query("
      SELECT * FROM peminjaman
      INNER JOIN users ON peminjaman.UserID = users.UserID
      INNER JOIN buku ON peminjaman.BukuID = buku.BukuID
    ");

    $data = [];
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;
  }
}
