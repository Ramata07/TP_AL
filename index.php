<?php  

require_once 'controllers/ArticleController.php';
afficherArticles();

?>



<?php
/*require 'config/database.php';

$requete = "SELECT titre, contenu, dateCreation, dateModification, categorie.libelle 
            FROM article
            JOIN categorie ON article.categorie = categorie.id;";

$stat = $myPDO->prepare($requete);
$stat -> execute();

$resultats = $stat->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>  
    <head>
        <title> Affichage d'informations </title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js"></script>
    </head>
    <body>
        <h1> Site d'informations de Rahmatulaah<3 </h1>

            <div class="filtres">
                 <button onclick="filtrer('tous')">Tous</button>
                <button onclick="filtrer('Sport')">Sport</button>
                <button onclick="filtrer('Santé')">Santé</button>
                <button onclick="filtrer('Education')">Education</button>
                <button onclick="filtrer('Politique')">Politique</button>
            </div>

            <div class="article">
       
        <?php foreach ($resultats as $item) { ?>

            <div class="carte" data-categorie="<?php echo $item['libelle']; ?>">
                       
        <p class="contenu"><?php echo $item['contenu']; ?></p>
        <p class="date"><?php echo $item['dateCreation']; ?></p>
        <p class="date"><?php echo $item['dateModification']; ?></p>
        <p class="categorie"><?php echo $item['libelle']; ?></p>

            </div>
            
            <?php } ?>

            </div>


        
    </body>
</html>
?>
*/
