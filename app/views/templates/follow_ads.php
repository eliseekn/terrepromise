<div id='follow_ads' class='w3-modal'>
	<div class='w3-modal-content w3-animate-top'>
		<header class='w3-container w3-dark-green w3-padding-small'>
			<h5 class='w3-text-white'>Répondre à une annonce</h5>
			<span onclick="document.getElementById('follow_ads').style.display='none'" class='w3-closebtn w3-display-topright w3-padding w3-text-white'><i class='fa fa-times fa-lg'></i></span>
		</header>
		
		<div class='w3-container'>
			<form action='annonces/follow_ads' method='post'>
				<span class='w3-bar-item'>
					<input class='w3-checkbox' type='radio' name='categorie' value='email' checked />
					<label>Envoyer email à l'annonceur</label>
					<input class='w3-checkbox' type='radio' name='categorie' value='sms' />
					<label>Envoyer un SMS à l'annonceur</label>
					<input class='w3-checkbox' type='radio' name='categorie' value='call' />
					<label>Contacter l'annonceur</label>
				</span>
				
				<br />
				<button type='submit' name='follow_ads' class='w3-button w3-mobile w3-section w3-dark-green w3-hover-white w3-text-white w3-hover-text-dark-green'>Valider</button>
				<button onclick="document.getElementById('follow_ads').style.display='none'" class='w3-button w3-mobile w3-section w3-dark-green w3-hover-white w3-text-white w3-hover-text-dark-green'>Annuler</button>
			</form>
		</div>
	</div>
</div>
