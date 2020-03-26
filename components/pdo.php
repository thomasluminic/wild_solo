<?php
require_once('env.php');
try {
    $connexion = new PDO('mysql:host=localhost;dbname=wild_solo;charset=utf8', $user, $mdp,
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        )
    );
} catch (Exception $e) {
    die('Erreur : ' . $e -> getMessage());
}