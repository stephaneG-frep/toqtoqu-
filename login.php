<?php
    require_once __DIR__. "/templates/header.php";
    require_once __DIR__. "/lib/user.php";

    $errors = [];
    $messages = [];

    

    if (isset($_POST['loginUser'])) {

        $user = verifyUserLoginPassword($pdo, $_POST['email'], $_POST['password']);
         if ($user) {
           $_SESSION['user'] = ['email' => $user['email']];
           header('location: index.php');
         } else {
            $errors[] = " Une erreur est survenue vérifier vos M-D-P et EMAIL !!";
         }
    }
    
?>

<div class="container">
    <h1>Connexion</h1>

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


    <form action="" method="post">

        <div class="mb-3">
            <label for="email" class="form-label">Votre Email : </label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Votre mot-de-passe : </label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <input type="submit" value="Connexion" name="loginUser" class="btn btn-primary">

    </form>
</div>






<?php
    require_once __DIR__. "/templates/footer.php";
?>