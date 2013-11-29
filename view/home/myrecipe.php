<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Commentaire Google Analytics Content Experiment code
<script>function utmx_section(){}function utmx(){}(function(){var
k='78884588-1',d=document,l=d.location,c=d.cookie;
if(l.search.indexOf('utm_expid='+k)>0)return;
function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
</script><script>utmx('url','A/B');</script>
<!-- End of Google Analytics Content Experiment code -->

      <meta charset="utf-8">
      <title>Shiftie 1.0</title>
      <meta name="description" content="Shiftie is a new site who's proposing to users to post their recipes and to vote for others users' recipes, all that to promote the most voted recipe on the homepage for 24h!">
      <meta name="author" content="">
      <link href="assets/css/css.css" rel="stylesheet">
      <link rel="shortcut icon" href="assets/images/favicon.ico">

      <!--  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45595359-1', 'shiftie.org');
  ga('send', 'pageview');

</script> --> 
  </head>
  <body>
    <div id="header">
      <div class="row_logo"><a href="#"><img src="assets/images/logo.png"></a></div>
      <div class="row_menu">
        <div class="menu">
          <a href="#" class="bloc_menu">Catalogue</a><span>•</span>
          <a href="#" class="bloc_menu">Submit Recipe</a><span>•</span>
          <a href="#" class="bloc_menu">Books</a><span>•</span>
          <a href="#" class="bloc_menu">Contact</a><span>•</span>
          <a href="#" class="bloc_menu"><?php echo $_SESSION['users_name'].' '.$_SESSION['users_firstname']; ?></a>
        </div>
      </div>
    </div>

    <div id="myrecipe">
      <div class="titre"><span>•</span>My Recipe</div>
      <div class="search"><input type="text" placeholder="Search into My Recipe"></input><a class="icon icon-search" href="#"></a></div>
      <div class="tablerecipe">
        
        <div class="bloc_recipe bloc_add">
          <a href="?appli=home&action=index&page=submit_recipe" class="add"><img src="assets/images/add_recipe.png"></a>
        </div>
        <?php foreach ($recipes as $recipe): ?>   
       
        <div class="bloc_recipe1 bloc_validate">
          <a href="#"><img src="<?php echo $recipe['photo_petite']; ?>">
            <div class="info1">
              <a href="#"><?php echo $recipe['recette_name']; ?></a>
            </div>
          </a>
        </div>
 <?php endforeach; ?>
        
       <!-- <div class="pagination">
          <a class="bloc_pagination" href="#"><span class="icon icon-left"></span></a>
          <a class="bloc_chiffre actif" href="#">1</a>
          <a class="bloc_chiffre" href="#">2</a>
          <a class="bloc_chiffre" href="#">3</a>
          <a class="bloc_pagination" href="#"><span class="icon icon-right"></span></a>
        </div>-->


      </div>
    </div>

    <div id="footer">
       2013 SHIFTIE.ORG • <a href="http://shiftie.org/construction.html">Site Map</a> • <a href="http://shiftie.org/construction.html">Legal Notices</a>  • Website created by the Shiftie Team
    </div>
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="js/shiftie.js"></script>
  </body>
  </html>