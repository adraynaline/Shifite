<?php 
	function user_on(){
		try {
		global $connexion;
		$query = $connexion->prepare('SELECT * FROM USERS WHERE login = :login AND password = :password');
		$query->bindValue(':login', 'test', PDO::PARAM_STR);
		$query->bindValue(':password', 'test', PDO::PARAM_STR);
		$query->execute();
		$rows = $query->fetchAll();
		return($rows);
		}
		catch(Exception $e)
	{
		echo "La requete n'a pas marché" ,$e->getMessage();
		die();
	}
	}
 ?>