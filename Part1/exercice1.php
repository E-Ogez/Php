<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Exercice 1</title>
    <link rel="stylesheet" href="../Index.css">
</head>

<body>

    <?php
    $NombreAleatoire = rand(0, 100);
    if ($NombreAleatoire % 2 == 0) {
        echo "<p class=red>$NombreAleatoire Paire</p>";
    } else {
        echo "<p class=blue>$NombreAleatoire Impaire</p>";
    }
    ?>
    <p><a href="../index.php">Retour</a></p>
</body>

</html>