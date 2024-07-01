<?php 

require_once __DIR__. "/lib/recipe.php";
require_once __DIR__. "/lib/tools.php";
require_once __DIR__. "/templates/header.php";

$id = (int)$_GET["id"];
$recipe = getRecipeById($pdo, $id);


if ($recipe) {

    $ingredients = lineToArray($recipe['ingredients']);
    

?>
<div class="container">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="<?=getRecipeImage($recipe['image']);?>" class="d-block mx-lg-auto img-fluid shadow-lg p-3 mb-5 bg-warning rounded"
             alt="<?=$recipe['title']; ?>" width="700"
                height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?=$recipe["title"]; ?></h1>
            <p class="lead"><?=$recipe["description"]; ?></p>
            <hr>
            <h2>Ingrédients</h2>
            <ul class="list-group">
                <?php foreach($ingredients as $key => $ingredient) {?>
                <li class="list-group-item"><?=" * ".$ingredient; ?></li>
                <?php }?>
            </ul>
            <hr>
            <h2>Instruction</h2>
            <p class="lead"><?= nl2br($recipe["instructions"]); ?></p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <img src="<?=getRecipeImage($recipe['image']);?>" class="d-block mx-lg-auto img-fluid shadow-lg p-3 mb-5 bg-warning rounded"
             alt="<?=$recipe['title']; ?>" width="350"
                loading="lazy">
        </div>
        <div class="col-sm">
            <img src="<?=getRecipeImage($recipe['image']);?>" class="d-block mx-lg-auto img-fluid shadow-lg p-3 mb-5 bg-warning rounded" 
            alt="<?=$recipe['title']; ?>" width="350"
                loading="lazy">
        </div>
        <div class="col-sm">
            <img src="<?=getRecipeImage($recipe['image']);?>" class="d-block mx-lg-auto img-fluid shadow-lg p-3 mb-5 bg-warning rounded" 
            alt="<?=$recipe['title']; ?>" width="350"
                loading="lazy">
        </div>
    </div>
</div>
<?php } else {?>
   <div class="row text-center">
      <h1>('o')Recette introuvable('o') !</h1>
   </div>
<?php }?>


<?php require_once __DIR__. "/templates/footer.php"; ?>