<div class="col-md-4">
    <div class="card shadow-lg p-3 mb-5 rounded " style="background: #C2DEDC ;">
        <img src="<?=getRecipeImage($recipe['image']);?>" class="card-img-top" alt="<?=$recipe['title']; ?>" width="500">
        <div class="card-body" style="background: #CEE6F3 ;">
            <h5 class="card-title"><?=$recipe['title']; ?></h5>
            <p class="card-text"><?=$recipe['description']; ?></p>
            <a href="recette.php?id=<?=$recipe['id'];?>" class="btn btn-primary">Voir la recette</a>
        </div>
    </div>
</div>
