<?php 
require_once __DIR__. "/lib/config.php";
require_once __DIR__. "/lib/recipe.php";
require_once __DIR__. "/templates/header.php";


?>




    <div class="container col-xxl-8 px-4 py-5">
        <h1>Toutes les recettes</h1>

        
    </div>


    <div class="row mx-2">

        <?php foreach($recipes as $key => $recipe) {
            include("templates/recipe_partial.php");
        }?>

    </div>


<?php require_once __DIR__. "/templates/footer.php"; ?>