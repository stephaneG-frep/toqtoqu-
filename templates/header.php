<?php
   require_once __DIR__. "/../lib/session.php";
   require_once __DIR__. "/../lib/pdo.php";
   require_once __DIR__. "/../lib/config.php";
   require_once __DIR__. "/../lib/user.php";

 
   $currentPage = basename($_SERVER['SCRIPT_NAME']);


   
       
  
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/override-bootstrap.css">
</head>

<body style="background: #EBE4D1;">

    <div class="container" style="background: #CEE5D0;">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="index.php" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="assets/images/logo2.jpg" alt="logo du site" width="120" height="80">
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 nav nav-pills">
                <?php foreach ($mainMenu as $key => $value) {?>
                <li class="fw-bold nav-item"><a href="<?=$key; ?>"
                        class="nav-link <?php if ($currentPage === $key) { echo 'active'; } ?>"><?=$value; ?></a></li>
                <?php }?>
            </ul>

            <div class="col-md-3 text-end">
                <?php if (isset($_SESSION['user'])) {?>
                <a href="logout.php" class="btn btn-outline-primary me-2">Déconnexion</a>
                
                <?php } else { ?>
                <a href="login.php" class="btn btn-outline-primary me-2">Conexion</a>
                <a href="inscription.php" class="btn btn-primary">Inscription</a>
                <?php }?>
            </div>
        </header>
    </div>