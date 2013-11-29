<?php 
	function add_recipe($recette_name, $description, $photo, $ingredient,$time_prepa,$time_cuisson,$time_repos, $level, $preparation){
			try {
		global $connexion;
		$query = $connexion->prepare('INSERT INTO RECETTES (recette_name, description, photo,ingredient, time_prepa, time_cuisson, time_repos, level ,preparation)
									  VALUES (:recette_name , :description,:photo, :ingredient, :time_prepa, :time_cuisson, :time_repos, :level ,:preparation )');
		$query->bindParam(':recette_name', $recette_name, PDO::PARAM_STR);
		$query->bindParam(':description', $description,  PDO::PARAM_STR);
		$query->bindParam(':photo', $photo,  PDO::PARAM_STR);
		$query->bindParam(':ingredient', $ingredient,  PDO::PARAM_STR);
		$query->bindParam(':time_prepa', $prepa_time, PDO::PARAM_INT);
		$query->bindParam(':time_cuisson', $prepa_cuisson, PDO::PARAM_INT);
		$query->bindParam(':time_repos', $prepa_repos, PDO::PARAM_INT);
		$query->bindParam(':level', $level,  PDO::PARAM_STR);
		$query->bindParam(':preparation', $preparation,  PDO::PARAM_STR);
		
		//on execute la requete 
		$query->execute();	
	}
	catch(Exception $e)
	{
		echo "La requete n'a pas marché" ,$e->getMessage();
		die();
	}
	}

?>
  
<?php
	/*$recette_name = $_POST['recette_name'];
	$type = $_POST['type'];
	global $connexion;
		$query = $connexion->prepare('INSERT INTO RECETTES (recette_name, type)
									  VALUES (:recette_name , :type)');
		$query->bindParam(':recette_name', $recette_name);
		$query->bindParam(':type', $type);

		//on execute la requete 
		$query->execute();
		if($query){
	echo 1;
}
else {
	echo 0;
} */
 ?>
