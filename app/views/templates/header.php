<?php
session_start();
?>

<!doctype html>

<html lang='fr'>
	<head>
		<title><?= $this->title ?></title>
		
		<base href="/terrepromise_new/">
		
		<meta charset='utf-8' />
		<meta name='viewport' content='width=device-width,inital-scale=1' />
		<meta name='description' content='Terre promise est une plateforme qui met en relation tous les acteurs du monde agricole' />
		<meta name='keywords' content='agriculture,développement,plateforme' />
		<meta http-equiv='author' content="N'GUESSAN Kouadio Elisée" />
		
		<link rel='stylesheet' href='libs/css/w3.css' />
		<link rel='stylesheet' href='libs/css/fontawesome.css' />
		<link rel='stylesheet' href='assets/css/style.css' />
		<link rel='icon' href='assets/img/logo/logo_favicon.ico' />
		
		<script src='libs/js/jquery.min.js'></script>
		<script src='assets/js/script.js'></script>
		
		<script>
			//
		</script>
	</head>
	
	<body>
		<header class='w3-top'>
			<div class='w3-bar w3-dark-green'>
				<span class='w3-bar-item w3-mobile'>
					<img src='assets/img/logo/logo_mini_new.png' alt='Logo' title='Terre Promise' width='120' height='50' />
					<a class='w3-bar-item w3-button w3-mobile w3-hover-white w3-text-white w3-hover-text-dark-green w3-hide-large w3-hide-medium' href='javascript:void(0)' onclick='toggle_menu()'><i class='fa fa-bars fa-lg'></i></a>
				</span>
