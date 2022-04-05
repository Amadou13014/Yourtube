<?php require_once "../header/header.php" ?>
<?php require_once "../phpback/contactback.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet">
    <title>Contact</title>
</head>

<main class="main_compte_pu">
    <div class="container_compte_pu">
        <div class="cote_right_compte_pu">
            <a class="navigationitemp" href="compte.php">Modifier votre compte<span></span></a>
            <a class="navigationitemp" href="modifpwd.php">Modifier le mot de passe<span></span></a>
            <a class="navigationitemp" href="contact.php">Contact<span></span></a>

            <div class="trait"></div>
        </div>
        <div class="cote_left_compte_pu">
            <form action="#" method="post" class="form_input">
                <div class="input_compte">
                    <label for="email" class="pseudoclass"><span>Email</span></label>
                    <input class="inputclass_compte" name="emailmsg" type="email" placeholder="email" value="<?php echo $_SESSION['email'] ?>">
                </div>

                <div class="input_compte">
                    <label for="message" class="pseudoclass"><span>Message</span></label>
                    <textarea class="inputclass_compte" type="text" id="story" name="messagemsg" rows="18" cols="35" placeholder="Contacter nous....."></textarea>
                </div>
                <div class="buttonform">
                    <button class="submit_compte_maj" type="submit" name="submitcontact"><span>Envoyé</span></button>
                </div>

            </form>
        </div>
</main>

</html>