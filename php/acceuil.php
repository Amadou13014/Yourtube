<?php require_once "../header/header.php" ?>
<?php require_once "../phpback/acceuilback.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet">
    <title>Acceuil</title>
</head>

<main>
    <h1 class="grandtitre_acceuil">Yourtube</h1>
    <div class="globale_acceuil">
        <?php foreach ($sql1 as $posts) :
        ?>
            <div class="container_acceuil ">
                <div class="card">
                    <div class="card__header">
                        <?php if ($posts['id_type'] == 1) : ?>
                            <img src="<?php echo $posts['img'] ?> " class="img_size">
                        <?php else : ?>
                            <video width="400px" height="280px" controls>
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
                                <h5><?= $_SESSION['prenom'] . " " .$_SESSION['nom'] ?></h5>
                                <small><?php echo $posts['date']?></small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <?php endforeach ?>
    </div>
</main>

</html>