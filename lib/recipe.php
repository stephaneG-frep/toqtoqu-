<?php


  function getRecipeById(PDO $pdo, int $id)
  {
    $query = $pdo->prepare("SELECT * FROM recipes WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
  }

  // retourne les images
  function getRecipeImage(string|null $image)
  {
    if ($image === null) {
      return _ASSETS_IMG_PATH_."recipe_default.jpg";
    } else {
      return _RECIPES_IMG_PATH_.$image;
    }
  } 

  function getRecipes(PDO $pdo, int $limit = null) {
    $sql = 'SELECT * FROM recipes ORDER BY RAND() DESC';

    if ($limit) {
        $sql .= ' LIMIT :limit';
    }

    $query = $pdo->prepare($sql);

    if ($limit) {
        $query->bindParam(':limit', $limit, PDO::PARAM_INT);
    }

    $query->execute();
    return $query->fetchAll();
}

/*
function saveRecipe(PDO $pdo, int $category, string $title, string $description, string $ingredients,
                    string $instructions, string|null $file, string|null $file1,
                    string|null $file2, string|null $file3)
{
    $sql = "INSERT INTO `recipes`(`id`, `category_id`,
            `title`, `description`, `ingredients`, `instructions`, `image`, `image_a`, `image_b`, `image_c`)
            VALUES (NULL, :category_id, :title, :description, :ingredients, :instructions,
             NULL, NULL, NULL, NULL)";

    $query = $pdo->prepare($sql);
    $query->bindParam(':category_id', $category, PDO::PARAM_INT);
    $query->bindParam(':title', $title, PDO::PARAM_STR);
    $query->bindParam(':description', $description, PDO::PARAM_STR);
    $query->bindParam(':ingredients', $ingredients, PDO::PARAM_STR);
    $query->bindParam(':instructions', $instructions, PDO::PARAM_STR);
    $query->bindParam(':file', $file, PDO::PARAM_STR);
    $query->bindParam(':file1', $file1, PDO::PARAM_STR);
    $query->bindParam(':file2', $file2, PDO::PARAM_STR);
    $query->bindParam(':file3', $file3, PDO::PARAM_STR);

    return $query->execute();
}
*/
function saveRecipe(PDO $pdo, int $category, string $title, string $description, string $ingredients, string $instructions, string|null $image) 
{
  $sql = "INSERT INTO `recipes` (`id`, `category_id`, `title`, `description`, `ingredients`, `instructions`, `image`) VALUES (NULL, :category_id, :title, :description, :ingredients, :instructions, :image);";
  $query = $pdo->prepare($sql);
  $query->bindParam(':category_id', $category, PDO::PARAM_INT);
  $query->bindParam(':title', $title, PDO::PARAM_STR);
  $query->bindParam(':description', $description, PDO::PARAM_STR);
  $query->bindParam(':ingredients', $ingredients, PDO::PARAM_STR);
  $query->bindParam(':instructions', $instructions, PDO::PARAM_STR);
  $query->bindParam(':image', $image, PDO::PARAM_STR);
 
  return $query->execute();
}