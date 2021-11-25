<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../Index.css">
    <title>Exercice 7</title>
</head>

<body>
    <form action="exercice7.php" method="_SESSIONS">
        <input type="text " name="nom">
        <input type="submit">

    </form>
    <?php

    if (isset($_SESSION['nom'])) {
        echo "Votre nom est -> " . $_SESSION['nom'];
    } else {
        echo "Entrez votre nom";
    }
    ?>
    <p><a href="../index.php">Retour</a></p>
</body>

</html>