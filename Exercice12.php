<?php
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['ville']) && isset($_POST['codepostal'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $ville = htmlspecialchars($_POST['ville']);
    $codepostal = htmlspecialchars($_POST['codepostal']);

    echo "<table>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code postal</th>
            </tr>
            <tr>
                <td>$nom</td>
                <td>$prenom</td>
                <td>$adresse</td>
                <td>$ville</td>
                <td>$codepostal</td>
            </tr>
        </table>";
} else {
    echo "Veuillez remplir tous les champs du formulaire.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Exercice12:</title>
    <link rel="stylesheet" href="devoir.css">
</head>
<body>
    <h1>Exercice12:Formulaire Adresse Client</h1>
    <form action="traitement.php" method="post">
        <fieldset>
            <legend>Adresse client</legend>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required><br>

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required><br>

            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required><br>

            <label for="codepostal">Code postal :</label>
            <input type="text" id="codepostal" name="codepostal" required><br>
        </fieldset>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>