<?php
function tableauToHtmlTable($array, $headers = true)
{
    if (!is_array($array)) {
        return "Les données doivent être un tableau";
    }

    $html = '<table border="1">';

    // Récupération des clés pour les afficher en tant que titres
    $keys = array_keys($array);

    // Création de la première ligne (en-têtes)
    if ($headers) {
        $html .= '<tr>';
        foreach ($keys as $key) {
            $html .= '<th>' . htmlspecialchars($key) . '</th>';
        }
        $html .= '</tr>';
    }

    // Parcours des éléments du tableau
    foreach ($array as $sub_array) {
        $html .= '<tr>';
        foreach ($sub_array as $value) {
            $html .= '<td>' . htmlspecialchars($value) . '</td>';
        }
        $html .= '</tr>';
    }

    $html .= '</table>';

    return $html;
}

// Exemple d'utilisation
$array = array(
    'Personne' => array('Modou', 'Dame', 'Ousmane'),
    'Age' => array('23', '39', '37'),
    'Pays' => array('Touba', 'London', 'Paris')
);

echo tableauToHtmlTable($array);

?>