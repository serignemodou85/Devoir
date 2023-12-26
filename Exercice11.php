<?php
    // Utilisez une boucle while pour lire les tableaux des exercices 8 et 9
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
    <title>Exercice11:While</title>
    <link rel="stylesheet" href="devoir.css">
</head>
<body>
    <h1>Exercice11:Boucle while.</h1>
        <?php
        $keys = array_keys($personnes);
        $index = 0;

        while($index < count($keys)){
        $nom = $keys[$index];
        $info = $personnes[$nom];
        
        echo "Nom : " . $nom . "<br>";
        echo "Prénom : " . $info['prenom'] . "<br>";
        echo "Ville : " . $info['ville'] . "<br>";
        echo "Age : " . $info['age'] . "<br>";
        if(isset($info['numero_de_telephone'])){
            echo "Numéro de téléphone : " . $info['numero_de_telephone'] . "<br>";
        }
        echo "<hr>";
        
        $index++;
    }
    ?>
</body>
</html>