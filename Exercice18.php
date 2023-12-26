<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice17</title>
    <link rel="stylesheet" href="devoir.css">
</head>
<body>
    <h1>Exercice 17:  Boucle for imbriquée</h1>
    <?php
    for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i . " ";
    }
    echo "\n <br>";
}
?>
</body>
</html>