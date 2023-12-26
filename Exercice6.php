<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo6</title>
    <link rel="stylesheet" href="devoir.css">
</head>
<body>
<h1>EXERCICE 6:Diviseurs d’un nombre </h1>
    <p>un programme qui affiche l’ensemble des diviseurs d’un nombre saisi au clavier.</p>
    <form method="post">
        <label for="">veuiller saisir le nombre: </label>
        <input type="text" name="number"><br>
        <button type="submit">envoyer</button>
    </form>
</body>
<?php 
    if (isset($_POST['number'])) {if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = intval(trim($_POST['number']));
        $diviseurs = [];

        for ($i = 1; $i <= $nombre; $i++) {
            if ($nombre % $i == 0) {
                $diviseurs[] = $i;
            }
        }
        echo "le Diviseur de $nombre est : " . implode(", ", $diviseurs) . "\n"; 
    }
    } 
    ?>
</html>