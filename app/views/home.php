<?php
require_once('templates/header.php');
?>

		<!--menu de la page d'acceuil-->
		<span class='w3-right w3-padding-16 w3-hide-small'>
			<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-orange w3-hover-text-orange' href='#'>Acceuil</a>
			<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-white w3-hover-text-white w3-bottombar w3-border-dark-green w3-hover-border-orange' href='annonces/action'>Annonces</a>
			<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-white w3-hover-text-white w3-bottombar w3-border-dark-green w3-hover-border-orange' href='#services'>Services</a>
			<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-white w3-hover-text-white w3-bottombar w3-border-dark-green w3-hover-border-orange' href='#contacts'>Contacts</a>
			<button onclick="document.getElementById('search').style.display='block'" class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-orange w3-hover-text-orange'><i class='fa fa-search fa-lg'></i></button>
			
			<?php
			if (isset($_SESSION['user'])) {
				$user = $_SESSION['user'];
				echo "<div class='w3-dropdown-hover'>";
				echo "<button class='w3-button w3-mobile w3-hover-dark-green w3-text-orange w3-hover-text-orange'><i class='fa fa-user fa-lg'></i><i class='fa fa-caret-down'></i></button>";
				echo "<div id='dropdown_menu' class='w3-dropdown-content w3-bar-block w3-border w3-dark-green'>";
				echo "<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-white w3-hover-text-white w3-bottombar w3-border-dark-green w3-hover-border-orange' href='profile/action/$user->id'><i class='fa fa-user-edit fa-lg'></i> Mon profil</a>";
				echo "<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-white w3-hover-text-white w3-bottombar w3-border-dark-green w3-hover-border-orange' href='home/logout'><i class='fa fa-power-off fa-lg'></i> Déconnexion</a>";
				echo "</div></div>";
			}
			?>
		</span>
	</div>

	<div id='mobile_menu' class='w3-bar-block w3-dark-green w3-hide w3-hide-large w3-hide-medium'>
		<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-orange w3-hover-text-orange' href='#'>Acceuil</a>
		<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-white w3-hover-text-white w3-bottombar w3-border-dark-green w3-hover-border-orange' href='annonces/action'>Annonces</a>
		<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-white w3-hover-text-white w3-bottombar w3-border-dark-green w3-hover-border-orange' href='#services'>Services</a>
		<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-white w3-hover-text-white w3-bottombar w3-border-dark-green w3-hover-border-orange' href='#contacts'>Contacts</a>
		<button onclick="document.getElementById('search').style.display='block" class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-orange w3-hover-text-orange'><i class='fa fa-search fa-lg'></i></button>

		<?php
		if (isset($_SESSION['user'])) {
			$user = $_SESSION['user'];
			echo "<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-white w3-hover-text-white w3-bottombar w3-border-dark-green w3-hover-border-orange' href='profile/action/$user->id'><i class='fa fa-user-edit fa-lg'></i> Mon profil</a>";
			echo "<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-white w3-hover-text-white w3-bottombar w3-border-dark-green w3-hover-border-orange' href='home/logout'><i class='fa fa-power-off fa-lg'></i> Déconnexion</a>";	
		}
		?>
	</div>
</header>
			
<!--showcase-->
<div class='showcase w3-display-container w3-center' style='margin-top:75px'>
	<div>
		<h1 class='w3-text-shadow'><strong>Nous mettons en relation les acteurs du monde agricole!</strong></h1>
		<hr />
		
		<?php
		if (isset($_SESSION['user'])) {
			$user = $_SESSION['user'];
			echo "<h2 class='w3-text-shadow'>Bienvenue <strong><span style='text-transform:uppercase'>$user->nom</span></strong></h2>";
		} else {
			echo "<button onclick=\"document.getElementById('login').style.display='block'\" class='w3-button w3-mobile w3-section w3-dark-green w3-xlarge w3-hover-white w3-text-white w3-hover-text-dark-green'>Connexion</button>";
			echo "
				<button onclick=\"document.getElementById('register').style.display='block'\" class='w3-button w3-mobile w3-section w3-white w3-xlarge w3-text-green w3-text-dark-green w3-hover-dark-green w3-hover-text-white'>Inscription</button>";
		}
		?>
	</div>
</div>

<!--news
<div class='section_header w3-dark-green w3-hover-apacity'>
	<div class='w3-container w3-center w3-padding-16'>
		<h1 class='w3-text-white w3-text-shadow'>Actualités</h1>
		<hr />
		<p class='w3-text-white w3-text-shadow'>Suivez les dernières actualités</p>
	</div>
</div>

<div class='w3-content w3-display-container'>
	<div class='w3-display-container slide w3-animate-opacity'>
		<img src='public/img/news/actualite_1.png' style='width:100%;height:500px' />
		<div class='w3-container w3-display-bottomright w3-large w3-padding-16 w3-black w3-xlarge'>Lancement de la première édition du hackathon civagrihack 2018!</div>
	</div>
	
	<!--
	<div class='w3-display-container slide w3-animate-opacity'>
	<img src='public/img/news/actualite_2.jpg' style='width:100%;height:400px;' />
	<div class='w3-container w3-display-bottomright w3-large w3-padding-16 w3-black w3-opacity'>Le cacao mercedes expérimenté dans le nord.</div>
	</div>

	<div class='w3-display-container slide w3-animate-opacity'>
	<img src='public/img/news/actualite_3.jpg' style='width:100%;height:400px;' />
	<div class='w3-container w3-display-bottomright w3-large w3-padding-16 w3-black w3-opacity'>Des bananes 100% bio!</div>
	</div>

	<button class='w3-button w3-mobile w3-display-left w3-dark-green w3-medium w3-hover-dark-green w3-text-orange w3-hover-text-white' onclick='slide_show(-1)'><i class='fa fa-angle-left w3-large'></i></button>
	<button class='w3-button w3-mobile w3-display-right w3-dark-green w3-medium w3-hover-dark-green w3-text-orange w3-hover-text-white' onclick='slide_show(1)'><i class='fa fa-angle-right w3-large'></i></button>
</div>

<!--services-->
<div id='services' class='section_header w3-dark-green w3-hover-apacity' style='margin-top:0px'>
	<div class='w3-container w3-center w3-padding-16'>
		<h1 class='w3-text-white w3-text-shadow'>Services</h1>
		<hr />
		<p class='w3-text-white w3-text-shadow'>Découvrez tous nos services</p>
	</div>
</div>

<div class='w3-container w3-center w3-white'>
	<div class='w3-row-padding w3-padding-32'>
		<div class='w3-col m3 l3 w3-center w3-padding-16 w3-topbar w3-bottombar w3-border-white w3-hover-border-orange'>
			<h2 class='w3-text-dark-green'><i class='fa fa-book fa-lg w3-text-orange'></i> Formations</h2>
			<p>Bénéficiez de nos offres de formations.</p>

			<a href='services.php#formations' class='link w3-text-dark-green w3-hover-text-dark-green'>Accédez aux formations</a>
		</div>

		<div class='w3-col m3 l3 w3-center w3-padding-16 w3-topbar w3-bottombar w3-border-white w3-hover-border-orange'>
			<h2 class='w3-text-dark-green'><i class='fa fa-blind fa-lg w3-text-orange'></i> Assistance</h2>
			<p>Bénéficiez de conseils et d'une assistance technique.</p>

			<a href='services.php#assistance' class='link w3-text-dark-green w3-hover-text-dark-green'>En savoir plus</a>
		</div>

		<div class='w3-col m3 l3 w3-center w3-padding-16 w3-topbar w3-bottombar w3-border-white w3-hover-border-orange'>
			<h2 class='w3-text-dark-green'><i class='fa fa-shopping-cart fa-lg w3-text-orange'></i> Agro-Shop</h2>
			<p>Découvrez tous nos produits en vente.</p>

			<a href='#' class='link w3-text-dark-green w3-hover-text-dark-green'>Découvrir tous les produits</a>
		</div>

		<div class='w3-col m3 l3 w3-center w3-padding-16 w3-topbar w3-bottombar w3-border-white w3-hover-border-orange'>
			<h2 class='w3-text-dark-green'><i class='fa fa-newspaper fa-lg w3-text-orange'></i> Annonces</h2>
			<p>Diffusez des annonces ciblées.</p>

			<a href='#' class='link w3-text-dark-green w3-hover-text-dark-green'>Diffuser une annonce</a>
		</div>
	</div>
</div>

<!--contacts-->
<div id='contacts' class='section_header w3-dark-green w3-hover-apacity'>
	<div class='w3-container w3-center w3-padding-16'>
		<h1 class='w3-text-white w3-text-shadow'>Contacts</h1>
		<hr />
		<p class='w3-text-white w3-text-shadow'>Contactez-nous pour plus d'informations</p>
	</div>
</div>

<div class='w3-container w3-white'>
	<div class='w3-row-padding w3-padding-32'>
		<div class='w3-col m7 l7 w3-card-4'>
			<form action='#' method='post'>
				<input class='w3-input w3-border w3-section' type='text' name='nom' maxlength='50' placeholder='Nom' required='required' />
				<input class='w3-input w3-border w3-section' type='email' name='email' maxlength='50' placeholder='Email' required='required' />
				<input class='w3-input w3-border w3-section' type='text' name='objet' maxlength='50' placeholder='Objet' required='required' />
				<textarea class='w3-input w3-border' name='message' style='resize:none' placeholder='Votre message' maxlength='255' cols='6' rows='4' required='required'></textarea>
				<button type='submit' name='message' class='w3-button w3-mobile w3-section w3-dark-green w3-hover-white w3-text-white w3-hover-text-dark-green'>Envoyer</button>
			</form>
		</div>
			
		<div class='w3-col m4 l4 w3-center'>
			<p><i class='fa fa-phone w3-xlarge w3-text-orange'></i> (+225) 00000000/00000000</p>
			<p><i class='fa fa-envelope w3-xlarge w3-text-orange'></i> terrepromise@gmail.com</p>
		</div>
	</div>
</div>

<!--boîtes de connexion et d'inscription-->
<div id='login' class='w3-modal'>
	<div class='w3-modal-content w3-animate-top'>
		<header class='w3-container w3-dark-green w3-padding-small'>
			<h5 class='w3-text-white'>Connectez-vous à votre compte</h5>
			<span onclick="document.getElementById('login').style.display='none'" class='w3-closebtn w3-display-topright w3-padding w3-text-white'><i class='fa fa-times fa-lg'></i></span>
		</header>

		<div class='w3-container'>
			<form action='home/login' method='post'>
				<input class='w3-input w3-border w3-section' type='text' name='email' maxlength='50' autofocus='autofocus' placeholder='Addresse email' required='required' />
				<input class='w3-input w3-border w3-section' type='password' name='password' maxlength='10' placeholder='Entrez votre mot de passe' required='required' />
				<button type='submit' name='login' class='w3-button w3-mobile w3-section w3-dark-green w3-hover-white w3-text-white w3-hover-text-dark-green'>Connexion</button>
				<a href='#' class='link w3-text-dark-green w3-hover-text-dark-green w3-mobile'>Mot de passe oublié?</a>
			</form>
		</div>
	</div>
</div>

<div id='register' class='w3-modal'>
	<div class='w3-modal-content w3-animate-top'>
		<header class='w3-container w3-dark-green w3-padding-small'>
			<h5 class='w3-text-white'>Créez un nouveau compte</h5>
			<span onclick="document.getElementById('register').style.display='none'" class='w3-closebtn w3-display-topright w3-padding w3-text-white'><i class='fa fa-times fa-lg'></i></span>
		</header>
		
		<div class='w3-container'>
			<form action='home/register' method='post'>
				<input class='w3-input w3-border w3-section' type='text' name='nom' maxlength='50' placeholder='Votre nom' autofocus='autofocus' required='required' />
				<input class='w3-input w3-border w3-section' type='text' name='prenoms' maxlength='50' placeholder='Votre prénoms' required='required' />
				<input class='w3-input w3-border w3-section' type='text' name='localite' maxlength='50' placeholder='Votre localité' required='required' />
				<input class='w3-input w3-border w3-section' type='text' name='contact' maxlength='50' placeholder='Votre contact' required='required' />
				<input class='w3-input w3-border w3-section' type='email' name='email' maxlength='50' placeholder='Votre addresse email' required='required' />
				<input class='w3-input w3-border w3-section' type='password' name='password' maxlength='10' placeholder='Votre mot de passe' required='required' />
				
				<span class='w3-bar-item'>
					<label>Sexe: </label> 
					<input class='w3-radio' type='radio' name='sexe' value='Masculin' checked />
					<label>Masculin</label>
					<input class='w3-radio' type='radio' name='sexe' value='Féminin' />
					<label>Féminin</label>
				</span>
				
				<br />
				
				<span class='w3-bar-item'>
					<label>Secteur d'activité:</label>
					<input class='w3-radio' type='radio' name='secteur' value='Production' checked />
					<label>Production</label>
					<input class='w3-radio' type='radio' name='secteur' value='Transport' />
					<label>Transport</label>
					<input class='w3-radio' type='radio' name='secteur' value='Distribution' />
					<label>Distribution</label>
					<input class='w3-radio' type='radio' name='secteur' value='Elevage' />
					<label>Elevage</label>
					<input class='w3-radio' type='radio' name='secteur' value='Autre' />
					<label>Autre</label>

					<input class='w3-input w3-bar-tem w3-border w3-section' type='text' name='autre' maxlength='255' placeholder='Si autre précisez' />
				</span>
				
				<button type='submit' name='register' class='w3-button w3-mobile w3-section w3-dark-green w3-hover-white w3-text-white w3-hover-text-dark-green'>Valider</button>
				<button type='reset' class='w3-button w3-mobile w3-section w3-dark-green w3-hover-white w3-text-white w3-hover-text-dark-green'>Rénitialiser</button>
			</form>
		</div>
	</div>
</div>

<?php
include_once('templates/search.php');
require_once('templates/footer.php');
?>
