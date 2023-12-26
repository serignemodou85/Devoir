<?php
function sinus($angle, $unit = 'radian') {
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice16</title>
    <link rel="stylesheet" href="devoir.css">
</head>
<body>
    <h1>Exercice 16: Fonction de calcul du sinus</h1>
</body>
</html>