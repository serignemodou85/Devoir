<?php

$personnes = array(
    "mbacke" => array("prenom" => "Fallou", "ville" => "Touba", "age" => 30),
    "fall" => array("prenom" => "modou", "ville" => "Dakar", "age" => 24),
    "gueye" => array("prenom" => "moustapha", "ville" => "thies", "age" => 18)
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice8</title>
    <link rel="stylesheet" href="devoir.css">
</head>
<body>
<table border="1">
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Ville</th>
        <th>Age</th>
    </tr>
    <?php foreach ($personnes as $nom => $infos) { ?>
        <tr>
            <td><?php echo $nom; ?></td>
            <td><?php echo $infos['prenom']; ?></td>
            <td><?php echo $infos['ville']; ?></td>
            <td><?php echo $infos['age']; ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>