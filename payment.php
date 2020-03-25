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
                <h1 id="stepTitle" class="step-title">étape 1 / 7</h1>
            </div>
            <?php require_once('./components/validatePayment.php'); ?>
            <form method="post">
                <div class="step show-on step-flex">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" placeholder="Veuillez saisir votre nom" value="<?= !empty($clearPost['name']) ? $clearPost['name'] : '' ?>" required>
                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Veuillez saisir votre prénom" value="<?= !empty($clearPost['firstname']) ? $clearPost['firstname'] : '' ?>" required>
                </div>
                <div class="step show-off step-flex">
                    <label for="stepChoice">Choix d'étape</label>
                    <select name="stepChoice" id="stepChoice" required>
                        <option value="off">Veuillez choisir une option</option>
                        <option value="pirate">Dance avec les requins</option>
                        <option value="vines">Le vin c'est trop bien</option>
                        <option value="lost">Je me suis perdu</option>
                    </select>
                </div>
                <div class="step show-off step-flex">
                    <label for="nbAdults">Nombre d'adulte</label>
                    <input type="text" name="nbAdults" id="nbAdults" placeholder="Veuillez saisir le nombre d'adults" value="<?= !empty($clearPost['nbAdults']) ? $clearPost['nbAdults'] : '' ?>" required>
                    <label for="nbChildren">Nombre d'enfant</label>
                    <input type="text" name="nbChildren" id="nbChildren" placeholder="Veuillez saisir le nombre d'enfants" value="<?= !empty($clearPost['nbChildren']) ? $clearPost['nbChildren'] : '' ?>" required>
                </div>
                <div class="step show-off step-flex">
                    <label for="adress">Adresse</label>
                    <input type="text" name="adress" id="adress" placeholder="Veuillez saisir votre adresse" value="<?= !empty($clearPost['adress']) ? $clearPost['adress'] : '' ?>" required>
                    <label for="postalCode">Code postal</label>
                    <input type="text" name="postalCode" id="postalCode" placeholder="Code postal" value="<?= !empty($clearPost['postalCode']) ? $clearPost['postalCode'] : '' ?>" required>
                </div>
                <div class="step show-off step-flex">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Veuillez saisir votre email" value="<?= !empty($clearPost['email']) ? $clearPost['email'] : '' ?>" required>
                    <label for="confirmEmail">Confirmation Email</label>
                    <input type="email" name="confirmEmail" id="email" placeholder="Veuillez saisir votre email" required>
                </div>
                <div class="step show-off step-flex">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" placeholder="Mon mot de passe" value="<?= !empty($clearPost['password']) ? $clearPost['password'] : '' ?>" required>
                    <label for="confirmPassword">Confirmation mot de passe</label>
                    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirmer mon mot de passe" required>
                </div>
                <div class="step show-off">
                    <h2>Récapitulatif :</h2>
                    <button class="next-button" type="submit">Envoyer</button>
                </div>
            </form>
            <div class="step-flex form-button">
                <button id="buttonPreviousStep" class="show-off next-button">Précédent</button>
                <button id="buttonNextStep" class="next-button">Suivant</button>
            </div>
        </div>
    </section>
<script src="./js/payment.js"></script>
</body>
</html>