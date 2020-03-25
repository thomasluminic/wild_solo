<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name=name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Wild Cruise - Récapitulatif</title>
</head>
<?php
    session_start();
    require_once('./components/header.php');
    require_once('components/pdo.php');
    require_once('./components/function.php');
    foreach ($_SESSION['id'] as $value => $key) {
        $id = $key;
    }
    $info = getAll('cruise', $id, $connexion);
?>
<div class="recap-center">
    <h1>Merci <?= $info['name'] ?>, pour votre reservation !</h1>
    <p>Vous recevrez bientôt votre facture par email à cette adresse : <span class="title-color"><?= $info['email'] ?></span></p>
    <p>Pour un total de <span class="title-color"><?= $info['adult'] ?></span> d'adulte et de <span class="title-color"><?= $info['children'] ?> </span>enfants</p>
    <p> Nous vous souhaiton un agréable séjour sur notre croisière : <span class="title-color"><?= $info['choice_cruise'] ?></span></p>
</div>
</body>
</html>

