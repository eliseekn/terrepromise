<?php

class Utils {
	
	public function create_dir($dir_path) {
		if (!is_dir($dir_path)) {
			mkdir($dir_path);
		}
	}
}
