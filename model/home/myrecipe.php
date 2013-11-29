<?php 
	function show_recipe(){
		global $connexion;

		$users_id = $_SESSION['users_id'];
		$query = $connexion->prepare('SELECT * FROM RECETTES WHERE auteur = :users_id');
		$query->bindParam(':users_id', $users_id, PDO::PARAM_INT);
		
		//on execute la requete 
		$query->execute();	
		$recipes = $query->fetchAll();
		//on retourne tous les articles selectionnés 
		
		return($recipes);
	}

 ?>