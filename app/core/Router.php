<?php namespace app\core;

class Router {

	protected $routes = [];
	protected $params = [];

	public function __construct()
	{
		$arr = require 'app/config/routes.php';
		foreach ($arr as $key => $value) {
			$this->add($key, $value);
		}
		print_r(this->routes);
		// debug(this->routes);
	}

	public function add($route, $params)
	{
		$route = '#^' . $route . '#';
		$this->routes[$route] = $params;
	}

	public function match()
	{

	}

	public function run()
	{
		echo 'Router start';
	}
}

?>