<?php
require_once './components/pdo.php';
require_once './components/function.php';
$cards = getAllCards($connexion);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Gestion card</title>
</head>
<body>
    <table>
        <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Départ</th>
            <th>Prix</th>
            <th>Durée</th>
            <th>Action</th>
        </tr>
        <tbody>
        <?php foreach ($cards as $card): ?>
            <tr>
                <td><?= $card['title'] ?></td>
                <td><?= $card['description'] ?></td>
                <td><?= $card['start'] ?></td>
                <td><?= $card['price'] ?></td>
                <td><?= $card['duration'] ?></td>
                <td>
                    <form action="" method="post">
                        <button value="edit">Edit</button>
                        <buttton value="delete">Supprimer</buttton>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <form action="./components/cardController.php" method="post" enctype="multipart/form-data">
        <input type="text" name="title" value="" placeholder="Croisière s'amuse">
        <input type="text" name="description" placeholder="Ici on s'amuse avec des petits bateaux">
        <input type="number" name="start" placeholder="Heure de départ" min="1" max="12">
        <input type="text" name="price" placeholder="50">
        <input type="number" name="duration" min="1" max="12">
        <input type="file" name="image" accept="image/png, image/jpeg">
        <input type="hidden" name="new" value="add">
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
