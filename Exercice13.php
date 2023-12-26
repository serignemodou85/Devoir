<?php
if (!empty($_POST)) {
    $prixHT = $_POST["prixHT"];
    $tauxTVA = $_POST["tauxTVA"];
    $montantTVA = $prixHT * $tauxTVA / 100;
    $prixTTC = $prixHT + $montantTVA;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Exercice13</title>
    <link rel="stylesheet" href="devoir.css">
</head>
<body>
    <h1>Exercice13:Formulaire de calcul de TVA</h1>
    <form method="post">
    Prix HT: <input type="text" name="prixHT" value="<?php echo $prixHT;?>">
    Taux TVA: <input type="text" name="tauxTVA" value="<?php echo $tauxTVA;?>">
    <input type="submit" name="submit" value="Calculer">
    </form>
    <?php
    if (!empty($_POST)) {
        echo "Montant TVA: <input type='text' value='$montantTVA' readonly>";
        echo "Prix TTC: <input type='text' value='$prixTTC' readonly>";
    }
    ?>  
</body>
</html>