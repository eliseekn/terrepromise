<?php

require_once('controller.php');
require_once('db.php');

class Annonces extends Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function action($id) {
		$ads_list = $this->get_ads("SELECT * FROM ads");
		if (!empty($ads_list)) {
			$this->set_page_content($ads_list);
		}
		
		$this->set_page_title('Terre Promise');
		$this->render_page('app/views/annonces.php');
	}
	
	public function search() {
		$search_query = $_POST['categorie'];
		$search_query .= explode(" ", $_POST['search_query']);
		$columns_name = array("categorie", "produit", "localite");

		$i = 1;

		foreach ($columns_name as $column_name) {
			foreach ($search_query as $q) {
				if ($i == 1) {
					$query .= "$column_name LIKE '%$q%'";
				} else {
					$query .= "OR $column_name LIKE '%$q%'";
				}
				$i++;
			}
		}
		
		$ads_list = $this->get_ads("SELECT * FROM ads WHERE $query");
		
		if (!empty($ads_list)) {
			$this->set_page_title('Terre Promise');
			$this->set_page_content($ads_list);
			$this->render_page('app/views/annonces.php');
		} else {
			echo "<p>Aucun résultat correspondant à votre recherche n'a été trouvé.</p>";
		}
	}
	
	private function get_ads($query) {
		$ads_list = "";
		$query_result = $this->model->query_db($query);
		
		while (true) {
			$rows = $this->model->get_rows($query_result);
			if ($rows == NULL) {
				break;
			} else {
				$ads = new Ads($rows);
				$rows = $this->model->get_rows_ex("SELECT * FROM users WHERE id='$ads->id_user'");
				$user = new User($rows);
				
				$ads_list .= "<div class='w3-col m3 l3 w3-card-4 w3-section w3-center'>
					<!--<img src='$user->photo' alt='Photo de profil' class='w3-padding' style='width:300px;height:280px' />-->
					<div class='w3-container w3-center'>
					<!--<p><span style='text-transform:uppercase'>$user->nom</span> $user->prenoms</p>-->
					<p>Produit: $ads->produit</p>
					<p>Quantité: $ads->quantite</p>
					<p>Prix: $ads->prix</p>
					<p>Localité: $user->localite</p>
					<p>Date de publication: $ads->date</p>
					<button onclick=\"document.getElementById('follow_ads').style.display='block'\" class='w3-button w3-mobile w3-section w3-dark-green w3-hover-white w3-text-white w3-hover-text-dark-green'>Répondre à l'annonce</button>
					<button onclick=\"document.getElementById('remove_ads').style.display='block'\" class='w3-button w3-mobile w3-section w3-dark-green w3-hover-white w3-text-white w3-hover-text-dark-green'>Retirer l'annonce</button>
					</div></div>";
			}
		}
		
		return $ads_list;
	}
	
	public function publish() {
		session_start();
		$user = $_SESSION['user'];
		
		$ads_data = array();
		
		$ads_data[0] = '';
		$ads_data[1] = $user->id;
		$ads_data[2] = trim($_POST['categorie']);
		$ads_data[3] = '';
		$ads_data[4] = trim($_POST['prix']);
		$ads_data[5] = trim($_POST['produit']);
		$ads_data[6] = trim($_POST['quantite']);
		
		if ($this->publish_ads($ads_data)) {
			$this->action($user->id);
		}
	}
}
