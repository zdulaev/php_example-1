<?php

namespace app\lib;

use PDO;

class Db
{
	protected $data_base;
	
	public function __construct()
	{
		$config = require 'app/config/db.php';
		$this->data_base = new PDO('mysql:dbname=' . $config['data_base_name'] . ';host=' . $config['host'], $config['user'], $config['password']);
	}
}