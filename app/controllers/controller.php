<?php

require_once('app/models/model.php');
require_once('app/views/view.php');
require_once('libs/jammu/jammu-instance');

class Controller {
	
	public function __construct() {
		$this->view = new View();
		$this->model = new Model();
	}
	
	public function set_page_title($title = 'Title') {
		$this->view->title = $title;
	}
	
	public function set_page_content($page_content = 'Content') {
		$this->view->page_content = $page_content;
	}
	
	public function render_page($page) {
		$this->view->render_page($page);
	}
	
	public function login_user($email, $password) {
		$email = $this->model->real_escape_string($email);
		$password = $this->model->hash_password($this->model->real_escape_string($password));
		
		$this->model->rows = $this->model->get_rows_ex("SELECT * FROM users WHERE email='$email' AND password='$password'");
		if ($this->model->rows != NULL) {
			return true;
		}
	}
	
	public function get_user_by_id($id) {
		$this->model->rows = $this->model->get_rows_ex("SELECT * FROM users WHERE id='$id'");
		if ($this->model->rows != NULL) {
			return true;
		}
	}
	
	public function register_user($user_data) {
		$contact = $this->model->real_escape_string($user_data[1]);
		$email = $this->model->real_escape_string($user_data[3]);
		$localite = $this->model->real_escape_string($user_data[4]);
		$nom = $this->model->real_escape_string($user_data[5]);
		$password = $this->model->hash_password($this->model->real_escape_string($user_data[6]));
		$prenoms = $this->model->real_escape_string($user_data[7]);
		$secteur = $this->model->real_escape_string($user_data[8]);
		$sexe = $this->model->real_escape_string($user_data[9]);
		
		$query_result = $this->model->query_db("INSERT INTO users (id, contact, date, 
			email, localite, nom, password, prenoms, secteur, sexe) VALUES(NULL, '$contact', NOW(), 
			'$email', '$localite', '$nom', '$password', '$prenoms', '$secteur', '$sexe')");
		
		if ($query_result != NULL) {
			$this->model->user_id = $this->model->get_insert_id();
			
			JammuI::sendMessage([
				"address" => "+225".$contact,
				"body" => "Bienvenue sur la plateforme Terre Promise.\nEnvoyez 1 pour publier une annonce et 2 pour rechercher une annonce au numero +22549072167"
			]);
			
			return true;
		}
	}
	
	public function update_user($column, $old_datum, $new_datum) {
		$query_result = $this->model->query_db("UPDATE users SET $column='$new_datum' WHERE $column='$old_datum'");
		if ($query_result != NULL) {
			return true;
		}
	}
	
	public function publish_ads($ads_data) {
		$id_user = $ads_data[1];
		$categorie = $this->model->real_escape_string($ads_data[2]);
		$prix = $this->model->real_escape_string($ads_data[4]);
		$produit = $this->model->real_escape_string($ads_data[5]);
		$quantite = $this->model->real_escape_string($ads_data[6]);
		
		$query_result = $this->model->query_db("INSERT INTO ads (id, id_user, categorie, date, prix, 
			produit, quantite) VALUES(NULL, '$id_user', '$categorie', NOW(), '$prix', '$produit', 
			'$quantite')");
		
		if ($query_result != NULL) {
			$this->model->ads_id = $this->model->get_insert_id();
			return true;
		}
	}
}
