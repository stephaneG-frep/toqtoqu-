<?php 

require_once __DIR__. "/templates/header.php";
require_once __DIR__. "/lib/recipe.php";

$recipes = getRecipes($pdo, _HOME_RECIPES_LIMIT_);

?>




    <div class="container col-xxl-8 px-4 py-5">
        <h1>Toqtoqué</h1>

        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="assets/images/logo.jpg" class="d-block mx-lg-auto img-fluid rounded-3 border border-warning
                shadow-lg p-3 mb-5 bg-warning rounded "
                   alt="logo du site" width="350" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Toqtoqué--un site de partage de recettes de
                    cuisine</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                    most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid
                    system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="recettes.php" class="btn btn-primary">Voir les recettes</a>
                </div>
            </div>
        </div>
    </div>


    <div class="row mx-2">

        <?php foreach($recipes as $key => $recipe) {
            include("templates/recipe_partial.php");
        }?>

    </div>


<?php require_once __DIR__. "/templates/footer.php"; ?>