<?php
require_once 'pdo.php';
require_once 'function.php';
if (isset($_POST['new']) && $_POST['new'] === 'add' && isset($_FILES['image'])) {
    $cleanPost = cleanPost($_POST);
    $errors = [];
    if(empty($cleanPost['title']) && $cleanPost['title'] > 150) {
        $errors[] = 'Vous devez mettre un titre et il ne doit pas excèder 150 caractères';
    }
    if(empty($cleanPost['description'])) {
        $errors[] = 'Vous devez mettre une description';
    }
    if(empty($cleanPost['start']) && !is_numeric($cleanPost['start']) && $cleanPost['start'] > 12 && $cleanPost['start'] > 0){
        $errors[] = 'Départ dois etre un chiffre inférieur à 12 et supérieur à 1';
    }
    if(empty($cleanPost['price']) && !is_numeric($cleanPost['price'])) {
        $errors[] = 'Votre prix doit etre en chiffre';
    }
    if(empty($cleanPost['duration']) && !is_numeric($cleanPost['price'])) {
        $errrors[] = 'Votre durée doit etre en chiffre';
    }
    if (empty($errors) && !empty($_FILES)) {
        var_dump('toto');
        if($_FILES['image']['error'] == 0) {
            $maxSize = 500 * 1024;
            if($_FILES['image']['size'] <= $maxSize) {
                $fileInfo = pathinfo($_FILES['image']['name']);
                $extension = strtolower($fileInfo['extension']);
                $authorizedExtension = ['jpg', 'jpeg', 'png', 'svg', 'gif', 'webp'];
                if (in_array($extension, $authorizedExtension)) {
                    $newName = md5(uniqid(rand(), true));
                    move_uploaded_file($_FILES['image']['tmp_name'], '../img/' . $newName . '.' . $extension);
                    $name = $newName . '.' . $extension;
                    $addCard = addCard($cleanPost, $name, $connexion);
                    header('Location: ../adminCard.php');
                }
            }
        }
    } else {
        echo $errors;
    }
}

function cleanPost(array $postNoClean): array
{
    $clearPost = [];
    foreach ($postNoClean as $key => $value) {
        $clearPost[$key] = trim(strip_tags(stripslashes(htmlspecialchars($value))));
    }
    return $clearPost;
}