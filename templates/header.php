<?php
   require_once __DIR__. "/../lib/config.php";
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

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li class="fw-bold"><a href="index.php" class="nav-link px-2 link-secondary">Accueil</a></li>
                <li class="fw-bold"><a href="recettes.php" class="nav-link px-2">Vos recettes</a></li>
                <li class="fw-bold"><a href="#" class="nav-link px-2">Pricing</a></li>
                <li class="fw-bold"><a href="#" class="nav-link px-2">FAQs</a></li>
                <li class="fw-bold"><a href="a_propos.php" class="nav-link px-2">A-propos</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
                <button type="button" class="btn btn-primary">Sign-up</button>
            </div>
        </header>
    </div>