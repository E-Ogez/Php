<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../Index.css">
    <title>Exercice 6</title>
</head>

<body>
    <form action="exercice6.php" method="GET">
        <input type="text " name="nom">
        <input type="submit">
    </form>
    <?php

    if (isset($_GET['nom'])) {
        $TEST = $_GET['nom'];
        echo ("Votre nom est ->");
        echo ("<span class=purple>$TEST</span>");
    } else {
        echo "Entrez votre nom";
    }

    ?>
    <p><a href="../index.php">Retour</a></p>
</body>

</html>