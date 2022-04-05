<?php require_once "config.php";

if (isset($_REQUEST['btnDelete'])) {
    $id = $_POST['id'];

    $sql8 = $db->prepare("DELETE FROM post WHERE id_post = $id");
    $sql8->execute();

    if($sql8) {
            header('Location: ../php/acceuil.php');
        }else {
            echo "no";
        
    }
}