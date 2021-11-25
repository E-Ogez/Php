<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 3</title>
    <link rel="stylesheet" href="../Index.css">
</head>

<body>
    <?php
    $array = array(
        "Perso1" => array(
            'Nom' => '<p>Ogez</p>',
            'Prenom' => 'Etan',
            'MotDePasse' => 'MDP : Mot de passe'
        ),
    );
    $array1 = array(
        "Perso2" => array(
            'Nom' => 'Ogez',
            'Prenom' => '<p>Etan</p>',
            'MotDePasse' => 'MDP : Mot de passe'
        ),
    );
    $array2 = array(
        "Perso3" => array(
            'Nom' => 'Ogez',
            'Prenom' => 'Etan',
            'MotDePasse' => 'MDP : Mot de passe'
        ),
    );
    echo $array["Perso1"]["Nom"];
    echo $array1["Perso2"]["Prenom"];
    echo $array2["Perso3"]["MotDePasse"];

    ?>
    <p><a href="../index.html">Retour</a></p>
</body>

</html>