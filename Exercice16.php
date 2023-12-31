<?php
function sinus($angle, $unit = 'radian') {
    if (!is_numeric($angle)) {
        return 'Erreur: L\'angle doit être un nombre.';
    }

    switch ($unit) {
        case 'degre': // degrés
            $angle = deg2rad($angle);
            break;
        case 'grade': // grades
            $angle = deg2rad($angle * 0.9);
            break;
        case 'radian': // radians
        default:
            break;
    }
    return sin($angle);
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice16</title>
    <link rel="stylesheet" href="devoir.css">
</head>
<body>
    <h1>Exercice 16: Fonction de calcul du sinus</h1>

    <form action="" method="get">
        <label for="angle">Angle:</label>
        <input type="text" id="angle" name="angle" required>
        <br>
        <label for="unit">Unité:</label>
        <select id="unit" name="unit">
            <option value="radian">Radians</option>
            <option value="degre">Degrés</option>
            <option value="grade">Grades</option>
        </select>
        <br>
        <input type="submit" value="Calculer le sinus">
    </form>

    <?php
    if (isset($_GET['angle'])) {
        $angle = $_GET['angle'];
        $unit = $_GET['unit'];
        echo "<p>Résultat: " . sinus($angle, $unit) . "</p>";
    }
    ?>
</body>
</html>