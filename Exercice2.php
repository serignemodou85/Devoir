<?php
    function est_multiplede_trois_et_de_cinq($number) {
        if (($number % 3 == 0) && ($number % 5 == 0)) {
            return true;
        } else {
            return false;
        }
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2</title>
    <link rel="stylesheet" href="devoir.css">
</head>
<body>
    <h1>EXERCICE 2: Condition multiple</h1>
<form method="post">
        <label for="">veuiller saisir le nombre: </label>
        <input type="text" name="number"><br>
        <button type="submit">envoyer</button>
    </form>
    <?php 
        if (isset($_POST['number'])) {
            $number = intval($_POST['number']);
            if (est_multiplede_trois_et_de_cinq($number)) {
                echo "Le nombre $number est un multiple de 3 et de 5. <br>";
            } else {
                echo "Le nombre $number n'est pas un multiple de 3 et de 5. <br>";
            }
        }
    ?>
</body>
</html>