<?php 
class Controller
{
	public function view($path, $data = [])
	{
		include '../app/views/'.$path.'.php';
	}

	public function model($model)
	{
		include '../app/models/'.$model.'.php';
		return new $model;
	}
}