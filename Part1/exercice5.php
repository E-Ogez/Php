<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../Index.css">
    <title>Exercice 5</title>
</head>

<body>
    <form action="exercice5.php" method="POST">
        <input type="text" id="name" name="nom">
        <input type="submit">
    </form>
    <?php

    if (!empty($_POST['nom'])) {
        $test = $_POST['nom'];
        echo ("Votre nom est ->");
        echo ("<span class=red>$test</span>");
    } else {
        echo "Entrez votre nom";
    }

    ?>
    <p><a href="../index.php">Retour</a></p>
</body>

</html>