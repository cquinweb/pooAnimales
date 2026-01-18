<?php
include "process.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des livres avec la POO</title>
    <style>

    </style>
</head>
<body>

<h1>Gestion des livres avec la POO</h1>

<form method="POST">
    Edition :
    <select name="edition">
        <option value="tous">tous</option>
        <option value="bombaloo">bombaloo</option>
        <option value="Gallimard">Gallimard</option>
        <option value="Casterman">Casterman</option>
    </select>

    <br><br>

    Date de parution :
    <select name="date">
        <option value="tous">tous</option>
        <option value="2010">2010</option>
        <option value="2012">2012</option>
        <option value="1943">1943</option>
    </select>

    <br><br>

    <button type="submit">Valider</button>
</form>

<div class="container">
    <?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $edition = $_POST["edition"];
        $date    = $_POST["date"];

        foreach ($livres as $livre) {

            $matchEdition = ($edition === "tous") || ($livre->getEdition() === $edition);
            $matchDate    = ($date === "tous")    || ($livre->getDateParution() == $date);

            if ($matchEdition && $matchDate) {
                $livre->afficher();
            }
        }

    } else {

        foreach ($livres as $livre) {
            $livre->afficher();
        }
    }

    ?>
</div>

</body>
</html>
