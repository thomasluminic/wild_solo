<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/payment.css">
    <link rel="preload" href="./img/backgroundStep2.jpg" as="image">
    <link rel="preload" href="./img/backgroundStep3.jpg" as="image">
    <script src="https://kit.fontawesome.com/c8a8d1abbe.js" crossorigin="anonymous"></script>
    <title>Wild Cruis - Paiement</title>
</head>
<body>
    <header>
        <nav class="nav-payment">
            <div class="nav-back">
                <a href="index.php">
                    <i class="fas fa-undo"></i>
                </a>
            </div>
            <div class="nav-title">
                <h2>Réservation</h2>
            </div>
        </nav>
    </header>
    <section>
        <div>
            <div>
                <h1 id="stepTitle" class="step-title">étape 1 / 5</h1>
            </div>
            <form method="post" action="validatePayment.php">
                <div id="step1" class="show-on step-flex">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" placeholder="Veuillez saisir votre nom">
                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Veuillez saisir votre prénom">
                </div>
                <div id="step2" class="show-off step-flex">
                    <label for="stepChoice">Choix d'étape</label>
                    <select name="stepChoice" id="stepChoice">
                        <option value="pirate">Dance avec les requins</option>
                        <option value="vines">Le vin c'est trop bien</option>
                        <option value="lost">Je me suis perdu</option>
                    </select>
                </div>
                <div id="step3" class="show-off step-flex">
                    <label for="nbAdults">Nombre d'adulte</label>
                    <input type="text" name="nbAdults" id="nbAdults" placeholder="Veuillez saisir le nombre d'adults">
                    <label for="nbChildren">Nombre d'enfant</label>
                    <input type="text" name="nbChildren" id="nbChildren" placeholder="Veuillez saisir le nombre d'enfants">
                </div>
                <div id="step4" class="show-off step-flex">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Veuillez saisir votre email">
                    <label for="adress">Adresse</label>
                    <input type="text" name="adress" id="adress" placeholder="Veuillez saisir votre adresse">
                </div>
                <div id="step5" class="show-off">
                    <h2>Récapitulatif :</h2>
                    <button type="submit">Envoyer</button>
                </div>
            </form>
            <div class="step-flex">
                <button id="buttonStep" class="next-button">Suivant</button>
            </div>
        </div>
    </section>
<?php
    var_dump($_POST);
    if (!empty($_POST)) {
        $errors = [];
        $selectValue = [
            'pirates',
            'vines',
            'lost',
        ];
        if (empty($_POST['name']) || empty($_POST['firstname'])) {
            $errors[] = 'Veuillez écrire votre nom et prénom à l\'étape 1';
        }
        if (empty($_POST['stepChoice']) || !in_array($_POST['stepChoice'])) {
            $errors[] = 'Veuillez sélectionnez votre choix de croisière à l\'étape 2';
        }
        if (empty($_POST['nbChildren']) || empty($_POST['nbAdults'])) {
            $errors[] = 'Veuillez renseigner le nombre de participant à l\'étape 3';
        }
        if (empty($_POST['email']) || !preg_match("\w+@\w.+[a-z]{2-4}")) {
            $errors[] = 'Votre email n\'est pas valide';
        }
        if (empty($_POST['adress'])) {
            $errors[] = 'Veuillez saisir votre adresse';
        }
        if (empty($errors)) {

        } else {

        }
?>
<script src="./js/payment.js"></script>
</body>
</html>