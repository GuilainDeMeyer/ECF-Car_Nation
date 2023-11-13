<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier Car-Nation : restauration de voitures anciennes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<!-- HEADER -->
<?php 
require_once('templates/header.php')
?>



<!-- MAIN -->
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5 px-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="assets/Gallery/1969-chevrolet-camaro-z28.jpg" class="imgrad d-block mx-lg-auto img-fluid" alt="MainIMG" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Car-Nation : Restauration de véhicules anciens</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-outline-danger btn-lg px-4">Gallerie Véhicules</button>
            </div>
        </div>
    </div>



    <!-- CARDS -->
    <div class="container py-5">
        <h2 class="text-center display-8 fw-bold text-body-emphasis align-item-center pb-2">Restauration : Carrosserie Peintures Aérogommage</h2>
        <div class="row">
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card">
                    <img src="assets/Gallery/50276693852_ae5d9b0c45_o.jpg" class="card-img-top" alt="imgcard1" width="250">
                    <div class="card-body CardSoutien CTextSoutien">
                        <h2 class="titlecards">Carrosserie</h2>
                        <p class="card-text">Traitement anticorrosion, remise en état des tôles corrodées par découpe, soudure aluminium, acier et brasure, formage de la tôle.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card">
                    <img src="assets/Gallery/50621795238_8f868c5da6_o.jpg" class="card-img-top" alt="imgcard2" width="250">
                    <div class="card-body CardSoutien CTextSoutien">
                        <h2 class="titlecards">Peinture</h2>
                        <p class="card-text">Démontage complet ou partiel pour peinture, sablage, aérogommage, lustrage, vernis ...</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card">
                    <img src="assets/Gallery/50502970153_045da7eee9_o.jpg" class="card-img-top" alt="imgcard3" width="250">
                    <div class="card-body CardSoutien">
                        <h2 class="titlecards">Aérogommage</h2>
                        <p class="card-text CTextSoutien">Assainissement et restitution de l’aspect d’origine des revêtements ou éléments décapés pour un métal lisse, propre et débarrassé de la peinture et de la corrosion.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!-- ABOUT US -->
    <div class="row flex-lg-row align-items-center g-5 py-5 px-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="assets/Gallery/NB-Center-Employee-Anthony-6.avif" class="imgrad d-block mx-lg-auto img-fluid" alt="MainIMG" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h3 class="display-8 fw-bold text-body-emphasis lh-1 mb-3">Atelier : Qui sommes nous ?</h3>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-outline-danger btn-md px-4">A propos de nous</button>
            </div>
        </div>
    </div>




<!-- FOOTER -->
<?php 
require_once('templates/footer.php')
?>



</body>
</html>