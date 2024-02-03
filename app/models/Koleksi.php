<?php 
class Koleksi extends BaseModel
{
  public $table_name    = "koleksipribadi";
  public $table_id      = "KoleksiID";

  public function get()
  {
    $id = $_SESSION['UserID'];
    $query = "SELECT * FROM koleksipribadi
    INNER JOIN buku ON koleksipribadi.BukuID = buku.BukuID
    INNER JOIN users ON koleksipribadi.UserID = users.UserID
    WHERE users.UserID = $id
    ORDER BY koleksipribadi.KoleksiID DESC
    ";
    
    $result = $this->mysqli->query($query);

    $data = [];
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;
  }
}
