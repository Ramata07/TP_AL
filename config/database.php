<?php

$user = 'root';
$password = '';


try {
    $myPDO = new PDO('mysql:host=localhost;dbname=mglsi_news;charset=utf8mb4', $user, $password);
    $myPDO ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
   die("Connexion échouée " . $e->getMessage());
}

?>