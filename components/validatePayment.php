<?php
if (!empty($_POST)) {
    require_once('components/pdo.php');
    $errors = [];
    $selectValue = [
        'pirate',
        'vines',
        'lost',
    ];
    $clearPost = [];
    $isEmailRegister = '';
    foreach ($_POST as $key => $value) {
        $clearPost[$key] = trim(strip_tags(stripslashes(htmlspecialchars($value))));
    }
    $email = $clearPost['email'];
    $select = $connexion -> query("SELECT id FROM cruise WHERE email = '$email';");
    $isEmailRegister = $select -> fetch();
    if (empty($clearPost['name']) || empty($clearPost['firstname'])) {
        $errors[] = 'Veuillez écrire votre nom et prénom à l\'étape 1';
    }
    if (empty($clearPost['stepChoice']) || !in_array($clearPost['stepChoice'], $selectValue)) {
        $errors[] = 'Veuillez sélectionnez votre choix de croisière à l\'étape 2';
    }
    if (empty($clearPost['nbChildren']) || empty($clearPost['nbAdults'])) {
        $errors[] = 'Veuillez renseigner le nombre de participant à l\'étape 3';
    }
    if (empty($clearPost['adress'])) {
        $errors[] = 'Veuillez saisir votre adresse';
    }
    if (empty($clearPost['postalCode']) || !preg_match("#^[0-9]{5}$#", $clearPost['postalCode'])) {
        $errors[] = "Veuillez saisir votre code postal";
    }
    if (empty($clearPost['email']) || $clearPost['confirmEmail'] !== $clearPost['email'] || !filter_var($clearPost['email'], FILTER_VALIDATE_EMAIL) || $isEmailRegister === 1) {
        $errors[] = 'Votre email n\'est pas valide';
    }
    if (empty($clearPost['password']) || $clearPost['password'] !== $clearPost['confirmPassword'] || strlen($clearPost['password']) < 7) {
        $errors[] = 'Votre password doit contenir au moins 8 charactères';
    }
    if (empty($errors)) {
        $password = password_hash($clearPost['password'], PASSWORD_BCRYPT);
        $select = $connexion->prepare('INSERT INTO cruise 
            (name, firstname, email, password, children, adult, choice_cruise, adress, postal_code)
            VALUES (:name, :firstname, :email, :password, :children, :adult, :choice_cruise, :adress, :postal_code)');
        $select->bindValue('name', $clearPost['name']);
        $select->bindValue('firstname', $clearPost['firstname']);
        $select->bindValue('email', $clearPost['email']);
        $select->bindValue('password', $password);
        $select->bindValue('children', $clearPost['nbChildren']);
        $select->bindValue('adult', $clearPost['nbAdults']);
        $select->bindValue('choice_cruise', $clearPost['stepChoice']);
        $select->bindValue('adress', $clearPost['adress']);
        $select->bindValue('postal_code', $clearPost['postalCode']);
        if($select-> execute()) {
            $select = $connexion -> prepare("SELECT id FROM cruise WHERE email = '$email'");
            $select->bindValue('email', $email);
            $select->execute();
            $id = $select->fetch();
            session_start();
            $_SESSION['id'] = $id;
            header('Location: recapPayment.php');
        } else {
            echo 'Une erreur est survenu, Merci de patientez ou contacter le support';
        }
    } else {
        foreach ($errors as $error) {
            ?>
            <p class="errors"><?= $error ?></p>
        <?php }
    }
}
?>