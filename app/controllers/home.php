<?php

require_once('controller.php');
require_once('db.php');
require_once('utils.php');

class Home extends Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function action($id) {
		$this->set_page_title('Terre Promise');
		$this->render_page('app/views/home.php');
	}
	
	public function login() {
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		
		if ($this->login_user($email, $password)) {
			session_start();
			$user = new User($this->model->rows);
			$_SESSION['user'] = $user;
			$this->action();
		}
	}
	
	public function register() {
		$user_data = array();
		
		$user_data[0] = '';
		$user_data[1] = trim($_POST['contact']);
		$user_data[2] = '';
		$user_data[3] = trim($_POST['email']);
		$user_data[4] = trim($_POST['localite']);
		$user_data[5] = trim($_POST['nom']);
		$user_data[6] = trim($_POST['password']);
		$user_data[7] = trim($_POST['prenoms']);
		$user_data[8] = trim($_POST['secteur']);
		
		if ($user_data[8] == 'Autre') {
			$user_data[8] = trim($_POST['autre']);
		}
		
		$user_data[9] = trim($_POST['sexe']);
		
		if ($this->register_user($user_data)) {
			session_start();
			$user = new User($user_data);
			$_SESSION['user'] = $user;
			$this->action();
		}
	}
	
	public function logout() {
		session_start();
		unset($_SESSION['user']);
		session_destroy();
		
		$this->action();
	}
}
