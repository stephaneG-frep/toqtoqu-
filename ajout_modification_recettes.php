<?php 

require_once __DIR__. "/lib/recipe.php";
require_once __DIR__. "/lib/tools.php";
require_once __DIR__. "/templates/header.php";

if (isset($_POST['saveRecipe'])) {
   $res = saveRecipe($pdo, $_POST['category'], $_POST['title'], $_POST['description'], $_POST['ingredients'],
              $_POST['instructions'], NULL, NULL, NULL, NULL);
    var_dump($res);
    //$_POST['image'], $_POST['image1'], $_POST['image2'], $_POST['image3']
}  

?>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Déscription</label>
            <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="ingredients" class="form-label">Déscription</label>
            <textarea name="ingredients" id="ingredients" cols="30" rows="5" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="instructions" class="form-label">Déscription</label>
            <textarea name="instructions" id="instructions" cols="30" rows="5" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Categories</label>
            <select name="category" id="category" class="form-select">
                <option value="1">Entrée</option>
                <option value="2">PLat</option>
                <option value="3">Déssert</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="file" class="form-label">Images</label>
            <input type="file" name="images[ ]" multiple id="file" class="form-control">
            <p class="form-control">JPG or PNG (MAX. 800x400px) pas plus de 4 images </p>
        </div>
        <!--
        <div class="mb-3">
            <label for="file1" class="form-label">Image 2</label>
            <input type="file" name="file1" id="file1" class="form-control">
        </div>
        <div class="mb-3">
            <label for="file2" class="form-label">Image 3</label>
            <input type="file" name="file2" id="file2" class="form-control">
        </div>
        <div class="mb-3">
            <label for="file3" class="form-label">Image 4</label>
            <input type="file" name="file3" id="file3" class="form-control">
        </div>
        -->
        
        <input type="submit" value="Enregistrer" name="saveRecipe" class="btn btn-primary">

    </form>
</div>

<?php require_once __DIR__. "/templates/footer.php"; ?>