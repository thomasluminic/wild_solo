<?php
function findById(string $table, string $id, PDO $connexion): array
{
    $select = $connexion->prepare("SELECT name, firstname, email, choice_cruise, adult, children FROM $table WHERE id = :id");
    $select->bindValue(':id', $id);
    $select->execute();
    return $select -> fetch();
}

function getAllCards(PDO $connexion): array
{
    $select = $connexion->query("SELECT * from card");
    return $select->fetchAll();
}

function addCard(array $newCard,string $name, PDO $connexion): string
{
    $message = 'Une erreur est survenue merci de réessayer ultérieurement';
    $add = $connexion->prepare("INSERT INTO card (title, description, image, alt, price, start, duration) VALUES (:title, :description, :image, :alt, :price, :start, :duration)");
    $add->bindValue(':title', $newCard['title']);
    $add->bindValue(':description', $newCard['description']);
    $add->bindValue(':image', $name);
    $add->bindValue(':alt', 'Image de la croisière');
    $add->bindValue(':price', $newCard['price']);
    $add->bindValue(':start', $newCard['start']);
    $add->bindValue(':duration', $newCard['duration']);
    if($add->execute()){
        $message = 'Votre ajout c\'est bien passer';
    }
    return $message;
}