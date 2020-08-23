<?php
include_once 'fonctions.php';

 if (isset($_FILES['votre_image'])) {
    //Permet d'enregistrer dans assets, les images entrer dans le formulaire
    copy($_FILES['votre_image']['tmp_name'], 'assets/upload/'.$_FILES['votre_image']['name']);
    ?>
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/style.css">
        </head>
        <body>
            <div class="container-fluid">
                <div class="row row-height">
                    <div class="col-3"></div>
                    <div class="col-6 center-center">
                        <img class="img-size" src="<?php echo 'assets/upload/'.$_FILES['votre_image']['name']; ?>">
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        <script src="assets/js/bootstrap/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap/bootstrap.min.bundle.js"></script>
        </body>
        </html>
    <?php
    //Fonction native en PHP, permet de récupérer les données EXIF sous la forme d'un tableau associatif
    $exif = exif_read_data('assets/upload/'.$_FILES['votre_image']['name']);
    //Fonction développé dans fonctions.php
    EXIF_to_card ($exif);
}
?>


