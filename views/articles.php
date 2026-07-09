<!DOCTYPE html>
<html>  
    <head>
        <title>Affichage d'informations</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>Site d'informations de Rahmatulaah<3</h1>

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
                    <h2><?php echo $item['titre']; ?></h2>
                    <p class="contenu"><?php echo $item['contenu']; ?></p>
                    <p class="date"><?php echo $item['dateCreation']; ?></p>
                    <p class="date"><?php echo $item['dateModification']; ?></p>
                    <p class="categorie"><?php echo $item['libelle']; ?></p>
                </div>
            <?php } ?>
        </div>

        <script src="js/script.js"></script>
    </body>
</html>