<div id='publish' class='w3-modal'>
	<div class='w3-modal-content w3-animate-top'>
		<header class='w3-container w3-dark-green w3-padding-small'>
			<h5 class='w3-text-white'>Publier une annonce</h5>
			<span onclick="document.getElementById('publish').style.display='none'" class='w3-closebtn w3-display-topright w3-padding w3-text-white'><i class='fa fa-times fa-lg'></i></span>
		</header>
		
		<div class='w3-container'>
			<form action='annonces/publish' method='post'>
				<input class='w3-input w3-border w3-section' type='text' name='produit' maxlength='50' placeholder='Entrez le nom de votre produit (example: Tomate)' autofocus='autofocus' required='required' />
				<input class='w3-input w3-border w3-section' type='text' name='quantite' maxlength='50' placeholder='Entrez la quantite du produit disponible (example: 100 kilos)' required='required' />
				<input class='w3-input w3-border w3-section' type='text' name='prix' maxlength='50' placeholder='Entrez le prix du produit (example: 50 000 FCFA)' required='required' />
				
				<span class='w3-bar-item'>
					<label>Catégorie: </label> 
					<input class='w3-radio' type='radio' name='categorie' value='Vente' checked/>
					<label>Vente</label>
					<input class='w3-radio' type='radio' name='categorie' value='Achat' />
					<label>Achat</label>
				</span>
				
				<br />
				<button type='submit' name='publish' class='w3-button w3-mobile w3-section w3-dark-green w3-hover-white w3-text-white w3-hover-text-dark-green'>Publier l'annonce</button>
			</form>
		</div>
	</div>
</div>
