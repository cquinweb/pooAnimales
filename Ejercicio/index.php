<?php
include "proccessAnimauxOO.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste Animalerie</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        .container {
            max-width: 700px;
            margin: 0 auto ;
            margin-top: 7%;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Liste Animalerie</h1>

    <a href="?type=tous">Tous</a> |
    <a href="?type=chien">Chiens</a> |
    <a href="?type=chat">Chats</a>

    <hr><br>

    <?php

    if (isset($_GET['type'])) {

        $type = $_GET['type'];

        if ($type === "tous") {
            Animal::afficherAnimalerie($animaux);
        } else {
            Animal::afficherAnimalerieParType($animaux, $type);
        }

    } else {
        Animal::afficherAnimalerie($animaux);
    }
    ?>

</div>

</body>
</html>
