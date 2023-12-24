<?php
function capitalize($words) {
    for ($i = 0; $i < count($words); $i++) {
        $words[$i] = ucfirst(strtolower($words[$i]));
    }
}

$names = array("MODOU", "moustapha", "DAOUD");
capitalize($names);
print_r($names);
?>

