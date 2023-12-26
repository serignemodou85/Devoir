<?php
if(isset($_POST['submit'])){
    $choice = $_POST['submit'];

    switch($choice){
        case 'Vendre':
            header('Location: vendre.php');
            break;
        case 'Acheter':
            header('Location: acheter.php');
            break;
        case 'Louer':
            header('Location: louer.php');
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immobilier - Vente, Achat ou Location</title>
    <link rel="stylesheet" href="devoir.css">
</head>
<body>
    <h1>Exercice14:Formulaire de choix d’agence immobilière</h1>
        <h2>Choisissez votre critère :</h2>
        <form method="post" action="action.php">
            <input type="submit" name="submit" value="Vendre">
            <input type="submit" name="submit" value="Acheter">
            <input type="submit" name="submit" value="Louer">
        </form>
</body>
</html>