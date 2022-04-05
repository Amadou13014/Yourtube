<?php require_once "../header/header.php" ?>
<?php require_once "../phpback/acceuilback.php" ?>
<?php require_once "../phpback/publierback.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>
<main class="main_compte_pu">
    <div class="container_compte_pu">
        <div class="cote_right_compte_pu">
            <a class="navigationitemp" href="publier.php">Publier un post<span></span></a>
            <a class="navigationitemp" href="modifpost.php">Supprimer un post<span></span></a>
            <div class="trait"></div>
        </div>
        <div class="cote_left_compte_pu">

            <div class="container1">
                <form method="post" action="../phpback/publierback.php" enctype="multipart/form-data">
                    <div class="contact1">
                        <label for="titre ">Titre</label>
                        <input type="titre" name="titre" id="titrepu" class="inputclass_compte" required>

                        <label for="text">Contenu</label>
                        <textarea type="text" id="story" name="contenue" rows="8" cols="35" class="inputclass_compte"></textarea>

                        <label for="upload ">Image</label>
                        <input type="file" name="upload">

                        <label for="titre " class="inputclass_compte">Catégorie</label>
                        <select id="type" name="typeN" class="inputclass_compte">
                            <option value="1" selected>Image</option>
                            <option value="2">Video</option>
                        </select>
                        <select id="category" name="categoryN" class="inputclass_compte">
                            <option value="1" selected>gamer</option>
                        </select>
                    </div>
                    <div class="buttonform">
                        <button class="submit_compte_maj" name="submitMsg17">Upload</button>
                    </div>
                </form>



            </div>

</main>

</html>