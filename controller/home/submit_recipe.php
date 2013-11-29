<?php 
include_once('model/home/index.php');
	
if(isset($_POST['recette_name']) && isset($_POST['description'])) {
    if(($_POST['recette_name'] != '') && ($_POST['description'] != '')) {
 
    	add_recipe($_POST['recette_name'], $_POST['description'], $_POST['photo'], $_POST['ingredient'], $_POST['time_prepa'], $_POST['time_cuisson'], $_POST['time_repos'], $_POST['level'], $_POST['preparation']);
       
        $reponse = 'ok';
    } else {
        $reponse = 'Les champs sont vides';
    }
} else {
    $reponse = 'Tous les champs ne sont pas parvenus';
}
 
$array['reponse'] = $reponse;
echo json_encode($array);
 ?>
