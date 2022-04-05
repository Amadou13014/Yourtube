<?php require_once "config.php" ?>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/header/header.php";



if (isset($_REQUEST['submitMsg17'])) {
    $titre = $_POST['titre'];
    $contenue = $_POST['contenue'];
    $categorie = $_POST['categoryN'];
    $type = $_POST['typeN'];
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/image/";
    $target_file = $target_dir . basename($_FILES["upload"]["name"]);
    $name = '/image/' . $_FILES['upload']['name'];

    if (move_uploaded_file($_FILES['upload']['tmp_name'], $target_file)) {
        $stmt1 = $db->prepare("INSERT INTO post (title, content, date, id_user, id_category, id_type, img)
                                        VALUES (:title, :content, now(), :id_user , :id_category, :id_type, :img)");
        $stmt1->bindParam(':title', $titre, PDO::PARAM_STR);
        $stmt1->bindParam(':content', $contenue, PDO::PARAM_STR);
        $stmt1->bindParam(':id_user',  $_SESSION['id_user'], PDO::PARAM_INT);
        $stmt1->bindParam(':id_category', $categorie);
        $stmt1->bindParam(':id_type', $type);
        $stmt1->bindParam(':img', $name, PDO::PARAM_STR);
        $stmt1->execute();

        if($stmt1) {
            header('Location: ../php/acceuil.php');
        }else {
            echo "no";
        }


    } else {
        echo ('an error occured');
    }
}
