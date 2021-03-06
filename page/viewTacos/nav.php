<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset = "utf-8"/>
        <link href = "page/viewTacos/Style.css" rel = "stylesheet" type = "text/css" media = "all"/>
        <link rel="stylesheet" href="https://kit.fontawesome.com/92920db574.js" /> 
        <script src="https://kit.fontawesome.com/92920db574.js" crossorigin="anonymous"></script>
        <title>Pimp My Tacos</title>
    </head>
<body>
<?php
    include("DAO/CommandeDAO.php");
    $Commande = CommandeDAO::findAllCommande($_SESSION["user"]);
    $_SESSION["cardSize"] = sizeof($Commande);
?>
    <nav>
        <div class="logo">
            <audio id="audio_play">
                <source src="Audio/Titre.mp4" type="audio/ogg" />
            </audio>
            <a href = "?page=Main"><img class = "logo" src = 'image/logo.png' alt="logo"></a>
        </div>
        <div class="lien">
            <a href="?page=viewTacos">Pimp ton tacos<p></p></a>
            <?php
            if(!empty($_SESSION["user"]))
            {
                ?>
                <a href="?page=ChangeInfo">Mes informations<p></p></a>
                <?php
            }
            ?>
            <a href="?page=Info">Notre histoire<p></p></a>
        </div>
        <div class="bouton">
            <a href="?page=panier"><i class="fas fa-shopping-cart"><?php echo '('.$_SESSION["cardSize"].') ';?></i></a>
            <?php
            if(!empty($_SESSION["user"]))
            {
                ?>
                <a href="?page=deconnexion"><i class="fas fa-sign-out-alt"></i></a>
                <?php
            }
            else
            {
                ?>
                <a href="?page=connexion"><i class="fas fa-sign-in-alt"></i></i></a>
                <?php
            }
            ?>
        </div>
    </nav>