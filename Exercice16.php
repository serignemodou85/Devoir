<?php
function sinus($angle, $unit = 'radian') {
    switch ($unit) {
        case 'degre': // degrés
            $angle = deg2rad($angle);
            break;
        case 'grade': // grades
            $angle = deg2rad($angle * 0.9);
            break;
        case 'radian': // radians
        default:
            break;
    }
    return sin($angle);
    echo sinus(90, 'degre');  // retourne 1
    echo sinus(100, 'grade');  // retourne 1
    echo sinus(pi()/2, 'radian');  // retourne 1

}
?>
