<?php
if (isset($_POST['number'])) {
    $rayon = (float)$_POST['number'];

    $diametre = 2 * $rayon;
    $perimetre = M_PI * $diametre;
    $surface = M_PI * $rayon * $rayon;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo5</title>
    <link rel="stylesheet" href="devoir.css">
</head>
<body>
<h1>EXERCICE 5:Cercle</h1>
<form method="post">
        <label for="">veuiller saisir le rayon: </label>
        <input type="text" name="number"><br>
        <button type="submit">envoyer</button>
    </form>
    <?php
         if (isset($diametre)) {
             echo "Le diamètre du cercle est $diametre.\n";
             echo "Le périmètre du cercle est $perimetre.\n";
             echo "La surface du cercle est $surface.\n";
         }
    ?>
</body>
</html>