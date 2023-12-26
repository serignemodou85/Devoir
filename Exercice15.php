<?php
function capitalize($words) {
    for ($i = 0; $i < count($words); $i++) {
        $words[$i] = ucfirst(strtolower($words[$i]));
    }
    return $words;
}

$names = array("MODOU", "moustapha", "DAOUD");
$names = capitalize($names);
print_r($names);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice15</title>
    <link rel="stylesheet" href="devoir.css">
</head>
<body>
    <h1>Exercice 15 : Fonction de mise en forme de chaînes</h1>
</body>
</html>