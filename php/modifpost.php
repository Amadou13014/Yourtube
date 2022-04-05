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
            <a class="navigationitemp" href="modifpost.php">Modifier un post<span></span></a>
            <a class="navigationitemp" href="supp_post.php">Supprimer un poste<span></span></a>
            <div class="trait"></div>
        </div>
        <div class="cote_left_compte_pu">
        <div class="globale_acceuil">
        <?php foreach ($sql1 as $posts) :
        ?>
            <div class="container_acceuil ">
                <div class="card">
                    <div class="card__header">
                    <?php if ($posts['id_type'] == 1) : ?>
                            <img src="<?php echo $posts['img'] ?> " class="img_size">
                        <?php else : ?>
                            <video width="400" height="100%" controls>
                                <source src="<?= $posts['img']; ?>" type="video/mp4">
                            </video>
                        <?php endif; ?>
                    </div>
                    <div class="card__body">
                        <span class="tag tag-blue"><?php echo $posts['type'] ?></span>
                        <h4><?php echo $posts['title'] ?></h4>
                        <p><?php echo $posts['content'] ?></p>
                    </div>
                    <div class="card__footer">
                        <div class="user">
                            <img src="https://i.pravatar.cc/40?img=1" alt="user__image" class="user__image">
                            <div class="user__info">
                                <h5>Jane Doe</h5>
                                <small>2h ago</small>
                            </div>
                        </div>
                        <form action="/phpback/suppback.php" method="POST">
                        <input hidden name="id" value="<?php echo $posts['id_post'] ?>">
                        <input name="btnDelete" type="submit" class="btnDelete" value="Supprimer">
                    </form>
                    </div>
                </div>

            </div>
        <?php endforeach ?>
    </div>
        </div>
</main>

</html>