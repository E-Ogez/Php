<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='index.css'>
    <script src='main.js'></script>
</head>
<body>

    <?php
       
        if(isset($_POST["connection"])){
            if($_POST["password"]=="1234" && $_POST["login"]=="julien" ){
            echo "Vous êtes Connectée";
           
            $_SESSION["EtatConnexion"]=true ;
            }else{
            if($_POST["password"]!="1234"){
                echo "Ce n'est pas le bon Mot de Passe";
            }
            if($_POST["login"]!="julien"){
                echo " Ce n'est pas le bon Identifiant";
            }
           
            }
        }

        if(isset($_POST["Deconnexion"])){
            session_unset();
            session_destroy();
        }

        if((isset($_SESSION["EtatConnexion"]) && $_SESSION["EtatConnexion"]==true)){
            ?>
                <p>Bienvenue sur votre Compte</p>

                <form action="" method="post" class="form-example">
                    <div class="form-example">
                    <div class="form-example">
                        <input type="submit" value="Deconnexion" name="Deconnexion" >
                    </div>
                </form>
            <?php
        }else{
            ?>

            <form action="" method="post" class="form-example">
                <div class="form-example">
                    <label for="login">Entrez votre Identifiant: </label>
                    <input type="text" name="login" id="login" required>
                </div>
                <div class="form-example">
                    <label for="password">Entrez votre Mot de passe : </label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="form-example">
                    <input type="submit" value="Connection" name="connection" >
                </div>
            </form>
            <?php
        }
    
    ?> 
    <p><a href="../index.php">Retour</a></p>
</body>
</html>

