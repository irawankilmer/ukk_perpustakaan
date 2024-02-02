<?php 
class BaseModel
{
	public $table_name;
	public $mysqli;

	public function __construct()
	{
		$this->mysqli = new mysqli('localhost', 'root', '', 'perpus_digital');
	}

	public function getByUsername($username)
	{
		$result = $this->mysqli->query("SELECT * FROM $this->table_name WHERE username = '$username'");

		return $result->fetch_assoc();
	}

	public function create($data)
	{
		$properties = '';
		foreach ($data as $properti => $value) {
			$properties .= $properti.", ";
		}
		$properties = rtrim($properties, ', ');

		$values = '';
		foreach ($data as $key => $value) {
			$values .= "'".$value."', ";
		}
		$values = rtrim($values, ', ');

		$this->mysqli->query("INSERT INTO $this->table_name($properties) VALUES($values)");

		return $this->mysqli->insert_id;
	}
	
	public function getAll()
	{
		$result = $this->mysqli->query("SELECT * FROM $this->table_name ORDER BY $this->table_id DESC");

		$data = [];
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;
	}

	public function getById($id)
	{
		$result = $this->mysqli->query("SELECT * FROM $this->table_name WHERE $this->table_id = '$id'");

		return $result->fetch_assoc();
	}

	public function update($id)
	{
		$values = '';
		foreach ($_POST as $key => $value) {
			$values .= $key." = '".$value."', ";
		}
		$values = rtrim($values, ', ');

		$this->mysqli->query("UPDATE $this->table_name SET $values WHERE $this->table_id = '$id'");

		return $this->mysqli->affected_rows;

	}

	public function delete($id)
	{
		$this->mysqli->query("DELETE FROM $this->table_name WHERE $this->table_id = '$id'");

		return $this->mysqli->affected_rows;
	}
}