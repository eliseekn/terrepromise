<?php

class User {
	
	public $id;
	public $contact;
	public $date;
	public $email;
	public $localite;
	public $nom;
	public $password;
	public $prenoms;
	public $secteur;
	public $sexe;
	
	public function __construct($user_data) {
		$this->id = $user_data[0];
		$this->contact = $user_data[1];
		$this->date = $user_data[2];
		$this->email = $user_data[3];
		$this->localite = $user_data[4];
		$this->nom = $user_data[5];
		$this->password = $user_data[6];
		$this->prenoms = $user_data[7];
		$this->secteur = $user_data[8];
		$this->sexe = $user_data[9];
	}
}

class Ads {
	
	public $id;
	public $id_user;
	public $categorie;
	public $date;
	public $prix;
	public $produit;
	public $quantite;
	
	public function __construct($ads_data) {
		$this->id = $ads_data[0];
		$this->id_user = $ads_data[1];
		$this->categorie = $ads_data[2];
		$this->date = $ads_data[3];
		$this->prix = $ads_data[4];
		$this->produit = $ads_data[5];
		$this->quantite = $ads_data[6];
	}
}
