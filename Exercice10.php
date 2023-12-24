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
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 10:foreach</title>
        <link rel="stylesheet" href="devoir.css"/>
    </head>
    <body>
    <table border=1>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Ville</th>
            <th>Âge</th>
        </tr>
        <?php
        foreach ($personnes as $nom => $details) {
            echo "<tr>";
            echo "<td>$nom</td>";
            foreach ($details as $key => $detail) {
                echo "<td>$detail</td>";
            }
            echo "</tr>";
        }
        ?>
    </body>
</html>
            