<?php 
require_once __DIR__. "/lib/config.php";
require_once __DIR__. "/templates/header.php";

$recipes = [
    ["title" => "Mousse au chocolat",
      "description" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
      "image" => "1-chocolate-au-mousse.jpg"],
    ["title" => "Gratin dauphinois",
      "description" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
      "image" => "2-gratin-dauphinois.jpg"],
    ["title" => "Salade de chèvre",
      "description" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
      "image" => "3-salade.jpg"],
   ];
?>




    <div class="container col-xxl-8 px-4 py-5">
        <h1>Toqtoqué</h1>

        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="assets/images/logo.jpg" class="d-block mx-lg-auto img-fluid rounded-3 border border-warning"
                    alt="logo du site" width="350" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Toqtoqué--un site de partage de recettes de
                    cuisine</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                    most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid
                    system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Voir les recettes</button>
                </div>
            </div>
        </div>
    </div>


    <div class="row mx-2">

        <?php foreach($recipes as $recipe) {?>
        <div class="col-md-4">
            <div class="card">
                <img src="<?=_RECIPES_IMG_PATH_.$recipe['image']; ?>" class="card-img-top"
                    alt="<?=$recipe['title']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?=$recipe['title']; ?></h5>
                    <p class="card-text"><?=$recipe['description']; ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <?php }?>

    </div>


<?php require_once __DIR__. "/templates/footer.php"; ?>