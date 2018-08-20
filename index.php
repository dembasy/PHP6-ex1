<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice 6</title>
    </head>
    <body>
        <p>
            <?php
            //Affichage des paramètres de l'url
            //$_GET = variable superGlobale
            if (!empty($_GET['lastname']) && !empty($_GET['firstname'])) {
                echo $_GET['firstname'] . ' ' . $_GET['lastname'];
            } else {
                echo 'Veuillez vérifier les paramètres d\'url';
            }
            ?>
        </p>
    </body
</html>