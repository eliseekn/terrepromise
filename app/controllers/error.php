<?php

require_once('controller.php');

class ErrorPage extends Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function action() {
		$this->set_page_title('Erreur 404');
		$this->render_page('app/views/error.php');
	}
}
