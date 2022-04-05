<?php require_once "../phpback/config.php"; ?>
<?php require_once "../phpback/barreback.php"; ?>
<?php require_once "../phpback/loginback.php" ?>    
<!DOCTYPE html>
<html lang="en">    

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="/css/style.css" rel="stylesheet">
    <title>Barre</title>
</head>

<header>
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="../php/acceuil.php">Yourtube</a>
        </div>
        <ul class="nav navbar-nav">
        
            <?php if (isset($_SESSION['email']) && isset($_SESSION['pseudo'])) : ?>
                <li><a href="compte.php">Mon compte</a></li>
                <li><a href="../phpback/logout.php" class="decoend">Deconnexion</a></li>
                <li><a href="../php/publier.php" class="publiend">Publier</a></li>
            <?php else : ?>
                <li><a href="insc.php">Crée un compte</a></li>
                <li><a href="login.php" class="connexions">Connexion</a></li>
            <?php endif; ?>
            


        </ul>
        <form class="navbar-form navbar-left" method="GET">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Search" name="search">  
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </form>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</header>