<?php
try {
    $connexion = new PDO('mysql:host=localhost;dbname=wild_solo;charset=utf8', 'root', '1234',
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        )
    );
} catch (Exception $e) {
    die('Erreur : ' . $e -> getMessage());
}