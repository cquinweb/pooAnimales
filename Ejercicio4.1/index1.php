<?php
require "processmaisons1.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <tittle>Gestion de Maisons</tittle>
</head>
<body>
<h1>Gestion de Maisons</h1>


<table>
    <tr>
        <th>#</th>
        <th>Date</th>
        <th>Nombre de chambres</th>
        <th>Surface</th>
    </tr>

    <?php
    foreach ($maisons as $maison): ?>
        <tr>
            <td><?php echo $maison->getId()?></td>
            <td><?php echo $maison->getDate() ?></td>
            <td><?php echo $maison->getChambres()?></td>
            <td><?php echo $maison->getSurface()?></td>
    </tr>
    <?php endforeach; ?>


</table>




</body>




</html>
