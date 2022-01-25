<?php

namespace app\core;

class View
{

	public $path;
	public $route;
	public $layout = 'default';


	public function __construct($route)
	{
		$this->route = $route;
		$this->path = $route['controller'] . '/' . $route['action'];
	}

	public function render($title, $vars=[])
	{
		if (file_exists('app/views/' . $this->path . '.php'))
		{
			extract($vars);
			ob_start();
			require 'app/views/' . $this->path . '.php';
			$content = ob_get_clean();
			require 'app/views/layouts/' . $this->layout . '.php';
		} 
		else 
		{
			echo '<b>Вид страницы не найден</b><br>' . $this->path;
		}
	}

	public static function errorCode($code)
	{
		http_response_code($code);
		require 'app/views/errors/' . $code . '.php';
		exit;
	}

	public function redirect($url)
	{
		header('location: ' . $url);
		exit;
	}

}