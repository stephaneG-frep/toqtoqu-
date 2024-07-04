<?php 

require_once __DIR__. "/lib/recipe.php";
require_once __DIR__. "/lib/tools.php";
require_once __DIR__. "/lib/category.php";
require_once __DIR__. "/templates/header.php";

$errors = [];
$messages = [];
$recipe = [
    'category_id' => '',
   'title' => '',
   'description' => '',
   'ingredients' => '',
   'instructions' => '',
];
$categories = getCategories($pdo);

if (isset($_POST['saveRecipe'])) { 
    $fileName = null;
  
    // test si un fichier a été envoyé
    if (isset($_FILES['file']['tmp_name']) && $_FILES['file']['tmp_name'] != '') {
         $checkImage = getimagesize($_FILES['file']['tmp_name']);
         if ($checkImage !== false) {
            // si c'est une image on envoie dans le bon fichier avec prefix unique et slugify
            $fileName = uniqid().'-'.slugify($_FILES['file']['name']);

            move_uploaded_file($_FILES['file']['tmp_name'], _RECIPES_IMG_PATH_.$fileName);

         } else {
            // si c'estpas une image (errors)
            $errors[] = "Erreur il faut une image";
         }
    }

    if (!$errors) {

        $res = saveRecipe($pdo, $_POST['category'], $_POST['title'], $_POST['description'], $_POST['ingredients'],
              $_POST['instructions'], $fileName);
        //$_POST['image'], $_POST['image1'], $_POST['image2'], $_POST['image3']
        if ($res) {
            $messages[] = "Votre recette est bien enregistée";
        } else {
            $errors[] = "Votre recette n'a pas été enregistrée";
        }
    }  
    
    $recipe = [
        'category_id' => $_POST['category'],
       'title' => $_POST['title'],
       'description' => $_POST['description'],
       'ingredients' => $_POST['ingredients'],
       'instructions' => $_POST['instructions'],
    ];
}  

?>

<div class="container">
    <?php foreach($messages as $message) {?>
    <div class="alert alert-success">
        <?= $message;?>
    </div>
    <?php }?>


    <?php foreach($errors as $error) {?>
    <div class="alert alert-danger">
        <?= $error;?>
    </div>
    <?php }?>


    <h1>Ajouter ou modifi... une recette</h1>
    <form action="" method="post" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" id="title" class="form-control" value="<?=$recipe['title'] ?>">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Déscription</label>
            <textarea name="description" id="description" cols="30" rows="5" class="form-control"><?=$recipe['description'] ?></textarea>
        </div>

        <div class="mb-3">
            <label for="ingredients" class="form-label">Déscription</label>
            <textarea name="ingredients" id="ingredients" cols="30" rows="5" class="form-control"><?=$recipe['ingredients'] ?></textarea>
        </div>

        <div class="mb-3">
            <label for="instructions" class="form-label">Déscription</label>
            <textarea name="instructions" id="instructions" cols="30" rows="5" class="form-control"><?=$recipe['instructions'] ?></textarea>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Categories</label>
            <select name="category" id="category" class="form-select">
                <?php foreach($categories as $categorie) {?>
                <option value="<?= $categorie['id'];?>" <?php if ($recipe['category_id'] == $category['id']) { echo 'selected="selected"'; }?>><?= $categorie['name'];?></option>
                <?php }?>
            </select>
        </div>

        <div class="mb-3">
            <label for="file" class="form-label">Images</label>
            <input type="file" name="file" multiple id="file" class="form-control mb-2">
            <input type="file" name="file2" id="file2" class="form-control mb-2">
            <input type="file" name="file3" id="file3" class="form-control mb-2">
            <input type="file" name="file4" id="file4" class="form-control mb-2">




            <p class="form-control">JPG or PNG (MAX. 800x400px) pas plus de 4 images </p>
        </div>
        

        <input type="submit" value="Enregistrer" name="saveRecipe" class="btn btn-primary">

    </form>
</div>

<?php require_once __DIR__. "/templates/footer.php"; ?>