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

}