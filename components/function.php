<?php
function getAll(string $table, string $id, PDO $connexion): array
{
    $select = $connexion->prepare("SELECT name, firstname, email, choice_cruise, adult, children FROM $table WHERE id = '$id'");
    $select->execute();
    return $select -> fetch();
}