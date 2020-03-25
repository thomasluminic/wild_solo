<?php
function getAll(string $table, string $id, PDO $connexion): array
{
    $select = $connexion -> query("SELECT name, firstname, email, choice_cruise, adult, children FROM $table WHERE id = '$id'");
    return $select -> fetch();
}