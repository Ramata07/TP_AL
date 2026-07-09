<?php
require_once __DIR__ . '/../config/database.php';

function getArticles() {
    global $myPDO;

    $requete = "SELECT titre, contenu, dateCreation, dateModification, categorie.libelle    
            FROM article    
            JOIN categorie ON article.categorie = categorie.id;";

    $stat = $myPDO->prepare($requete);
    $stat->execute();

    return $stat->fetchAll(PDO::FETCH_ASSOC);
}
?>