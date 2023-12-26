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