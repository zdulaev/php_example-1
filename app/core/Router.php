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
	}

	public function add($route, $params)
	{
		$route = '#^' . $route . '#';
		$this->routes[$route] = $params;
	}

	public function match()
	{
		$url = trim($_SERVER['REQUEST_URI'], '/');
		foreach($this->routes as $route => $params)
		{
			if (preg_match($route, $url, $matches))
			{
				$this->params = $params;
				return True;
			}
		}
		return False;
	}

	public function run()
	{
		if ($this->match())
		{
			echo 'Маршрут найден!';
		}
	}
}