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
        <title>Exercice 10:</title>
        <link rel="stylesheet" href="devoir.css"/>
    </head>
    <body>
        <h1>Exercice10:Boucle foreach.</h1>
    <table border=1>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Ville</th>
            <th>Âge</th>
        </tr>
        <?php
        foreach($personnes as $nom => $info){
            echo "Nom : " . $nom . "<br>";
            echo "Prénom : " . $info['prenom'] . "<br>";
            echo "Ville : " . $info['ville'] . "<br>";
            echo "Age : " . $info['age'] . "<br>";
            if(isset($info['numero_de_telephone'])){
                echo "Numéro de téléphone : " . $info['numero_de_telephone'] . "<br>";
            }
            echo "<hr>";
        }
        ?>
    </body>
</html>
            