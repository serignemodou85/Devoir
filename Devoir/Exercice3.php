<?php
$nombre = rand(100, 999);

if (!isset($_SESSION['Nbre_tentatives'])) {
    $_SESSION['Nbre_tentatives'] = 0;
}

if (isset($_POST['number'])) {
    $number = intval($_POST['number']);
    $_SESSION['Nbre_tentatives']++;

    if ($number == $nombre) {
        echo "Le nombre choisi était " . $nombre . ".</br>";
        echo "Le nombre de tentatives a été de " . $_SESSION['Nbre_tentatives'] . " fois.</br>";
        session_destroy();
    } else {
        echo "Dommage, c'est pas le bon nombre... Essaie encore !</br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo3</title>
    <link rel="stylesheet" href="devoir.css">
</head>
<body>
    <h1>EXERCICE 3</h1>
    <form method="post">
        </marquee>
        <label for="">veuiller saisir le nombre: </label>
        <input type="text" name="number"><br>
        <button type="submit">envoyer</button>
    </form>
</body>
</html>