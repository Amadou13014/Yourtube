<?php require_once "config.php" ?>

<?php

if (isset($_POST['submitmaj'])) {
    $pseudo = $_POST['pseudo'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    $update = $db->prepare("UPDATE user SET prenom= :prenom, nom= :nom, pseudo= :pseudo, email= :email WHERE id_user= :id_user");
    $update->bindParam(':id_user', $_SESSION["id_user"]);
    $update->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $update->bindParam(':nom', $nom, PDO::PARAM_STR);
    $update->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $update->bindParam(':email', $email, PDO::PARAM_STR);
    $update->execute();

    if ($update) {
        echo "<script>alert(\"Vos information a bien était modifier\")</script>";
    } else {
        echo "<script>alert(\"Erreur veuillez réeseyer\")</script>";
    }
    
}






?>
