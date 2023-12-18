<?php
$personnes = array(
    "mbacke" => array(
        "prénom" => "Moustapha",
        "ville" => "kedougou",
        "âge" => 20
    ),
    "fall" => array(
        "prénom" => "fallou",
        "ville" => "diourbel",
        "âge" => 25
    ),
    "cisse" => array(
        "prénom" => "oumy",
        "ville" => "zighinchor",
        "âge" => 35
    )
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice9</title>
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
    <?php foreach($personnes as $nom => $details){
        echo "Nom: " . $nom . "\n";
        echo "Prénom: " . $details["prénom"] . "\n";
        echo "Ville: " . $details["ville"] . "\n";
        echo "Âge: " . $details["âge"] . "\n";
        echo "\n";
        }
    ?>
</body>
</html>

