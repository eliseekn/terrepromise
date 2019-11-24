<?php

class Application {
	
	public function __construct($url) {
		$params = explode('/', $url);
		
		$controller = $params[0];
		$action = isset($params[1]) ? $params[1]:'action';
		$id = isset($params[2]) ? $params[2]:null;
		
		if (empty($controller)) {
			$controller = 'home';
		}
		
		if (file_exists('app/controllers/'.$controller.'.php')) {
			require_once('app/controllers/'.$controller.'.php');
			
			$controller = ucfirst($controller);
			$controller = new $controller();
			
			if (method_exists($controller, $action)) {
				$controller->$action($id);
			} else {
				$controller->action();
			}
		} else {
			require_once('app/controllers/error.php');
			
			$controller = new ErrorPage();
			$controller->action();
		}
	}
}
