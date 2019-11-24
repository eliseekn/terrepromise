<?php

class View {
	
	public function __construct() {
		//
	}
	
	public function render_page($page) {
		require_once($page);
	}
}
