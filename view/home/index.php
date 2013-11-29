<<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<title>Shiftie 1.0</title>
    	<meta name="description" content="Shiftie is a new site who's proposing to users to post their recipes and to vote for others users' recipes, all that to promote the most voted recipe on the homepage for 24h!">
    	<meta name="author" content="">
    	<link href="../../assets/css/css.css" rel="stylesheet">
    	<link rel="shortcut icon" href="assets/images/favicon.ico">
	</head>
	<body>
		
	 <div id="header">
      <div class="row_logo"><a href="#"><img src="../../assets/images/logo.png"></a></div>
      <div class="row_menu">
        <div class="menu">
          <a href="#" class="bloc_menu">Catalogue</a><span>•</span>
          <a href="?appli=home&action=index&page=submit_recipe" class="bloc_menu">Submit Recipe</a><span>•</span>
          <a href="#" class="bloc_menu">Books</a><span>•</span>
          <a href="#" class="bloc_menu">Contact</a><span>•</span>
          <a href="#" class="bloc_menu"><span class="icon icon-user"></span><?php echo $_SESSION['users_name'].' '.$_SESSION['users_firstname']; ?></a>
        </div>
      </div>
    </div>

		<?php	
			switch($page) 
		{			
			case "accueil": 
				require_once("view/home/content_accueil.php");
				break;
			case "submit_recipe": 
				require_once("view/home/content_submit_recipe.php");
				break;
			default:
				require_once("view/home/content_accueil.php");
				break;
		}	
		?>
		<div id="footer">
			 2013 SHIFTIE.ORG • <a href="">Site Map</a> • <a href="http://shiftie.org/construction.html">Legal Notices</a>  • Website created by the Shiftie Team
		</div>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="../../assets/ajax/submit_recipe_ajax.js"></script>
		<script type="text/javascript" src="../../assets/ajax/jquery.liteuploader.min.js"></script>
  	<script type="text/javascript" src="../../assets/ajax/upload_img.js"></script>
		<script type="text/javascript" src="../../assets/ajax/create_step_effect.js"></script>
    <script type="text/javascript">
 
   $("input:checkbox").click(function() {

  var bol = $("input:checkbox:checked").length >= 5;     
  $("input:checkbox").not(":checked").attr("disabled",bol);

});
  </script>


	</body>
	</html>