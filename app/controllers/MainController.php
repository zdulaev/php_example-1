<?php

namespace app\controllers;

use app\core\Controller;
use app\lib\Db;

class MainController extends Controller
{

	public function indexAction()
	{
		$data_base = new Db;

		$this->view->render('Главная страница');
	}

	
}