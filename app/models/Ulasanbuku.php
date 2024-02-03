<?php 
class Ulasanbuku extends BaseModel
{
  public $table_name  = "ulasanbuku";
  public $table_id    = "UlasanID";

  public function getByBookID($id)
  {
    $result = $this->mysqli->query("
      SELECT * FROM ulasanbuku
      INNER JOIN users ON ulasanbuku.UserID = users.UserID
      WHERE ulasanbuku.BukuID = '$id'
    ");

    $data = [];
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;

  }
}
