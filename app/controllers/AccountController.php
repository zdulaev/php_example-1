<?php

namespace app\controllers;

use app\core\Controller;

class AccountController extends Controller
{

	public function loginAction()
	{
		$this->view->redirect('///google.com');
		$this->view->render('Вход в аккаунт');
	}

	public function registerAction()
	{
		$this->view->render('Регистрация');
	}
	
}