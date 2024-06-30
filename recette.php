<?php 

require_once __DIR__. "/lib/recipe.php";
require_once __DIR__. "/templates/header.php";

$id = $_GET["id"];

?>
<div class="container">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="<?=_RECIPES_IMG_PATH_.$recipes[$id]['image']; ?>" class="d-block mx-lg-auto img-fluid"
             alt="<?=$recipes[$id]['title']; ?>" width="350" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?=$recipes[$id]["title"]; ?></h1>
            <p class="lead"><?=$recipes[$id]["description"]; ?></p>
        </div>
    </div>
</div>





<?php require_once __DIR__. "/templates/footer.php"; ?>