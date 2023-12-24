<?php

    $personnes = array(
        "mbacke" => array("prenom" => "Fallou", "ville" => "Touba", "age" => 30),
        "fall" => array("prenom" => "modou", "ville" => "Dakar", "age" => 24),
        "gueye" => array("prenom" => "moustapha", "ville" => "thies", "age" => 18)
    );
    $keys = array_keys($personnes);
    $i = 0;
    while ($i < count($personnes)) {
        echo $keys[$i] . ": ";
        $details = $personnes[$keys[$i]];
        $j = 0;
        while ($j < count($details)) {
            echo $details[$j] . " ";
            $j++;
        }
        echo "\n";
        $i++;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice11:While</title>
</head>
<body>
   
</body>
</html>