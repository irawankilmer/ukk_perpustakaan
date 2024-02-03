<?php 
class KBRelasi extends BaseModel
{
  public $table_name    = "kategoribuku_relasi";
  public $table_id      = "KategoriBukuID";

  public function get()
  {
    $query = "SELECT * FROM kategoribuku_relasi
    INNER JOIN buku ON kategoribuku_relasi.BukuID = buku.BukuID
    INNER JOIN kategoribuku ON kategoribuku_relasi.KategoriID = kategoribuku.KategoriID
    ORDER BY buku.BukuID DESC
    ";
    
    $result = $this->mysqli->query($query);

    $data = [];
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;
  }
}
