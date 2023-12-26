<?php
// Vérification de la présence des variables
if(isset($_POST['val1']) && isset($_POST['val2'])){
    // Récupération des variables
    $val1 = intval($_POST['val1']);
    $val2 = intval($_POST['val2']);

    // Calcul du PPCM
    $ppcm = $val1 * $val2 / pgcd($val1, $val2);

   
}

// Fonction pour calculer le plus grand commun diviseur (PGCD)
function pgcd($a, $b){
    while($b != 0){
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Exercice4</title>
    <link rel="stylesheet" href="devoir.css">
</head>
<body>
    <!-- Formulaire d'entrée -->
    <h1>Exercice 4 : PPCM de deux entiers</h1>
    <form method="post" action="">
        <label for="val1">Entier 1 :</label>
        <input type="number" id="val1" name="val1" required>
        <br>
        <label for="val2">Entier 2 :</label>
        <input type="number" id="val2" name="val2" required>
        <br>
        <input type="submit" value="Calculer le PPCM">
    </form>
    <?php
    // Affichage du résultat
    echo "Le PPCM de $val1 et $val2 est $ppcm";
    ?>
</body>
</html>