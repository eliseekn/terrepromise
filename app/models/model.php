<?php

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'iluvhacking');
define('DB_NAME', 'terrepromise');

class Model {
	
	private $connection;
	
	public function __construct() {
		$this->connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_error()) {
			die(mysqli_connect_error());
		}
		
		//création de la base de donnée des utilisateurs
		$this->query_db("CREATE TABLE IF NOT EXISTS users (
			id SMALLINT NOT NULL AUTO_INCREMENT,
			contact VARCHAR(50) NOT NULL,
			date DATETIME NOT NULL,
			email VARCHAR(50) NOT NULL,
			localite VARCHAR(50) NOT NULL,
			nom VARCHAR(50) NOT NULL,
			password VARCHAR(50) NOT NULL,
			prenoms VARCHAR(50) NOT NULL,
			secteur VARCHAR(50) NOT NULL,
			sexe VARCHAR(10) NOT NULL,
			PRIMARY KEY (id))");
			
		//création de la base de donnée des annonces
		$this->query_db("CREATE TABLE IF NOT EXISTS ads (
			id SMALLINT NOT NULL AUTO_INCREMENT,
			id_user SMALLINT NOT NULL,
			categorie VARCHAR(50) NOT NULL,
			date DATETIME NOT NULL,
			prix VARCHAR(50) NOT NULL,
			produit VARCHAR(50) NOT NULL,
			quantite VARCHAR(50) NOT NULL,
			PRIMARY KEY (id))");
	}
	
	public function query_db($query) {
		$query_result = mysqli_query($this->connection, $query);
		if ($query_result) {
			return $query_result;
		} else {
			die(mysqli_error($this->connection));
			return NULL;
		}
	}
	
	public function get_rows($query_result) {
		if ($query_result != NULL) {
			return mysqli_fetch_array($query_result, MYSQLI_NUM);
		} else {
			die(mysqli_error($this->connection));
			return NULL;
		}
	}
	
	public function get_rows_ex($query) {
		$query_result = $this->query_db($query);
		if ($query_result != NULL) {
			return mysqli_fetch_array($query_result, MYSQLI_NUM);
		} else {
			die(mysqli_error($this->connection));
			return NULL;
		}
	}
	
	public function get_insert_id() {
		return mysqli_insert_id($this->connection);
	}
	
	public function real_escape_string($str) {
		return mysqli_real_escape_string($this->connection, $str);
	}
	
	public function hash_password($password) {
		return hash('ripemd128', $password);
	}
}
