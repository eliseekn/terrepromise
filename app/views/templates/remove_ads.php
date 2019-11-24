<div id='remove_ads' class='w3-modal'>
	<div class='w3-modal-content w3-animate-top'>
		<header class='w3-container w3-dark-green w3-padding-small'>
			<h5 class='w3-text-white'>Etes vous sûre de vouloir retirer l'annonce?</h5>
			<span onclick="document.getElementById('remove_ads').style.display='none'" class='w3-closebtn w3-display-topright w3-padding w3-text-white'><i class='fa fa-times fa-lg'></i></span>
		</header>
		
		<div class='w3-container'>
			<form action='annonces/remove_ads' method='post'>
				<button type='submit' name='ads_action' class='w3-button w3-mobile w3-section w3-dark-green w3-hover-white w3-text-white w3-hover-text-dark-green'>Oui</button>
				<button onclick="document.getElementById('remove_ads').style.display='none'" class='w3-button w3-mobile w3-section w3-white w3-text-green w3-text-dark-green w3-hover-dark-green w3-hover-text-white'>Non</button>
			</form>
		</div>
	</div>
</div>
