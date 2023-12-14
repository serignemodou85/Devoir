<?php
    $nombre = intval(trim($_POST['number']));
    $diviseurs_propres = [];
    $somme_diviseurs_propres = 0;
    for ($i = 1; $i <= $nombre / 2; $i++) {
        if ($nombre % $i == 0) {
            $diviseurs_propres[] = $i;
            $somme_diviseurs_propres += $i;
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo7</title>
</head>
<body>
<h1>EXERCICE 7</h1>
<form method="post">
        <label for="">veuiller saisir le nombre: </label>
        <input type="text" name="number"><br>
        <button type="submit">envoyer</button>
    </form>
    <?php 
    if ($somme_diviseurs_propres == $nombre) {
        echo $nombre . " est un nombre parfait." . "\n";
    } else {
        echo $nombre . " n'est pas un nombre parfait." . "\n";
    }
    ?>
</body>
</html>