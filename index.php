<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exercice 6</title>
  </head>
  <body>
    
      <?php
      //grâce a la condition et a isset on va pouvoir recuperer le firstname et le lastname pour l'afficher
        if (isset($_GET['firstname']) && isset($_GET['lastname'])) {
        echo $_GET['firstname'] . ' ' . $_GET['lastname'];
      }
      ?>
    
  </body
</html>
