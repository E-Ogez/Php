<html lang="fr">

<head>
    <link rel="stylesheet" href="../Index.css">
    <title>exercice8</title>
</head>

<body>
    <form action="exercice8.php" method="_SESSIONS">
        <input type="text" size="" name="count">
        <input type="submit" value="Envoyer">
        <input type="reset" value="Réinitialiser">
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