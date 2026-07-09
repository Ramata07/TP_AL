<?php
require_once __DIR__ . '/../models/modelArticle.php';

function afficherArticles() {
    $resultats = getArticles();
    require __DIR__ . '/../views/articles.php';
}
?>