<?php
require_once('templates/header.php');
?>

	<!--menu de la page de profil-->
	<span class='w3-right w3-padding-16 w3-hide-small'>
		<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-white w3-hover-text-white w3-bottombar w3-border-dark-green w3-hover-border-orange' href='home/action'>Acceuil</a>
		<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-orange w3-hover-text-orange' href='#'>Annonces</a>
		<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-white w3-hover-text-white w3-bottombar w3-border-dark-green w3-hover-border-orange' href='home/#services'>Services</a>
		<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-white w3-hover-text-white w3-bottombar w3-border-dark-green w3-hover-border-orange' href='home/#contacts'>Contacts</a>
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
	
	<div id='mobile_menu' class='w3-bar-block w3-dark-green w3-hide w3-hide-large w3-hide-medium'>
		<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-white w3-hover-text-white w3-bottombar w3-border-dark-green w3-hover-border-orange' href='home/action'>Acceuil</a>
		<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-orange w3-hover-text-orange' href='#'>Annonces</a>
		<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-white w3-hover-text-white w3-bottombar w3-border-dark-green w3-hover-border-orange' href='home/#services'>Services</a>
		<a class='w3-bar-item w3-button w3-mobile w3-hover-dark-green w3-text-white w3-hover-text-white w3-bottombar w3-border-dark-green w3-hover-border-orange' href='home/#contacts'>Contacts</a>
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

<!--annonces des utilisateurs inscris-->
<div class="section_header page_header w3-dark-green w3-hover-apacity">
	<div class="w3-container w3-center w3-padding-16">
		<h1 class="w3-text-white w3-text-shadow">Annonces</h1>
		<hr />
		<p class="w3-text-white w3-text-shadow">Découvrez toutes les annonces des utilisateurs</p>
		
		<br />
		<button onclick="document.getElementById('publish').style.display='block'" class='w3-button w3-mobile w3-white w3-hover-dark-green w3-text-dark-green w3-hover-text-white w3-section'>Publier une annonce</button>
	</div>
</div>

<div class="w3-container w3-white">
	<div class="w3-row-padding w3-padding-32">
		<?php
		echo $this->page_content;
		?>
	</div>
</div>

<?php
include_once('templates/search.php');
include_once('templates/publish.php');
include_once('templates/follow_ads.php');
include_once('templates/remove_ads.php');
require_once('templates/footer.php');
?>
