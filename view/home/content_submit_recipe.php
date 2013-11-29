<div id="create_recipe">
  <form method="post" action="?appli=home&action=submit_recipe" >
    <div class="step step1">
      <div class="titre">
        <span>
          •
        </span>
        Step 1
      </div>
            
      <div class="expl">
        First you have to enter the name of your recipe, choose what type it is and some description.
      </div>

      <!-- TITRE RECETTE -->
      <div class="form_title">Title of the recipe:</div>
      <input class="titre_recette" id="recette_name" name="recette_name" type="text"></input>

      <!-- DESCRIPTION -->
      <div class="form_title">Description:</div>
      <textarea class="description" id="description" name="description" type="text"></textarea>


    <span  class="go_two bt">Next step</span>

    <div class="steps">
      <span class="undone done">1</span>
      <span class="undone">2</span>  
      <span class="undone">3</span>         
      <span class="undone">4</span>
      <span class="undone">5</span>
    </div>

  </div>
    <div class="step step2">
      <div class="titre"><span>•</span>Step 2</div>
   <div class="images">
              <!-- IMG WIDE -->
              <div id="previews" class="img_wide"></div>
              <!-- IMG NORMALE -->
              <div class="img_normal"></div>
              <div class="text_img">NB: When you upload your photo, make sure you have a minimum resolution of **** x ****. </br>
              You can zoom and postion it whatever you like.</div>
              <!-- BT UPLOAD -->
              <input type="file" id="photo" name="photo"  class="fileUpload" />
             <!-- <div id="details"></div>-->
              <input type="hidden" value="">
  <div id="response"></div>
 
      
    <span class="go_one bt">Previous step</span>
    <span class="go_three bt">Next step</span>

      <div class="steps">
        <span class="undone done">1</span>
        <span class="undone done">2</span>
        <span class="undone">3</span>         
        <span class="undone">4</span>
        <span class="undone">5</span>
      </div>
      </div>
    </div>
    <div class="step step3">
           <div class="titre"><span>•</span>Step 3</div>
        
      <div class="expl">Now you have to give me all the ingredients needed for that recipe, and try to tell me how difficult is your recipe</div>
     
         <!-- INGREDIENTS -->
          <div class="form_title">Ingredients</div>
          <textarea class="ingredient" id="ingredient" name="ingredient" type="text"></textarea>
          <!-- TEMPS -->
          <div class="row_time">
            <div class="form_title">Preparation time:
            <select class="time" name="time_prepa" id="time_prepa"><option>5</option><option>10</option><option>15</option></select>minutes.</div>
          </div>
          <div class="row_time">
            <div class="form_title">Cooking time:
            <select class="time" name="time_cuisson" id="time_cuisson"><option>5</option><option>10</option><option>15</option></select>minutes.</div>
          </div>
          <div class="row_time">
            <div class="form_title">Rest time:
            <select class="time" name="time_repos" id="time_repos"><option>5</option><option>10</option><option>15</option></select>minutes.</div>
          </div>
          <!-- DIIFCULTE -->
          <div class="form_title">How difficult is it to cook?</div>
          <select class="difficulty" name="level" id="level" type="text"><option>Easy</option><option>Medium</option><option>Hard</option></select>
       
        <span class="go_two bt">Previous step</span>
        <span class="go_four bt">Next step</span>
      
      
      <div class="steps">
        <span class="undone done">1</span>
        <span class="undone done">2</span>
        <span class="undone done">3</span>         
        <span class="undone">4</span>
        <span class="undone">5</span>
      </div>
            </div>
    <div class="step step4">
     <div class="titre"><span>•</span>Step 4</div>
        
      <div class="expl">It's time to tell me how you do this nice recipe, tell us all about the preparation</div>
             
          <div class="form_title">Preparation</div>
          <textarea class="preparation" id="preparation" name="preparation" type="text"></textarea>
        
<span class="go_three bt">Previous step</span>
        <span class="go_five bt">Next step</span>
  
      
      <div class="steps">
        <span class="undone done">1</span>
        <span class="undone done">2</span>
        <span class="undone done">3</span>         
        <span class="undone done">4</span>
        <span class="undone">5</span>
      </div>
    </div>
    <div class="step step5">
       <div class="titre"><span>•</span>Step 5</div>
        
      <div class="expl">Okay this our final goal, tag your recipe with those tags we propose you down there!</div>
    
        
          <div class="bloc_tag">
          <div class="row_tag">
            <div class="tag_title">Viande</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Volaille</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Canard</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Poulet</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Bovin</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Chevaline</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Mouton</div>
          </div>
          <div class="row_tag">
            <div class="tag_title">Produit de la mer</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Poisson</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Crustacé</div>
          </div>
          <div class="row_tag">
            <div class="tag_title">Condiment & Accompagnement</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Légume</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Pain</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Epice</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Herbe</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Sauce</div>
          </div>
          <div class="row_tag">
            <div class="tag_title">Sucré</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Gâteau</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Pâtisserie</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Fruit</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Glace</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Chocolat</div>
          </div>
        </div>
        <div class="bloc_tag2">
          <div class="row_tag">
            <div class="tag_title">Salé</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Pate</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Pizza</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Salade</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Soupe</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Fromage</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Sandwich</div>
          </div>
          <div class="row_tag">
            <div class="tag_title">Cuisson</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Friture</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Grillade</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Barbecue</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Vapeur</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Pané</div>
          </div>
          <div class="row_tag">
            <div class="tag_title">Spécifité</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Halal</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Casher</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Végétarien</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Chaud</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Froid</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Sucré/Salé</div>
          </div>
        </div>
        <button type="submit">Envoyez votre Recette</button>
        <span class="go_four bt">Previous step</span>
        
    
    </div>
     </form>
    </div>

