<?php require_once "config.php" ?>

<?php

if (isset($_POST['submit4'])) {
    $pseudo = $_POST['pseudo'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $param_password = password_hash($password, PASSWORD_DEFAULT);



    $stmt1 = $db->prepare("INSERT INTO user (prenom, nom, pseudo, email, password) VALUES (:prenom, :nom, :pseudo, :email, :password)");
    $stmt1->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $stmt1->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt1->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $stmt1->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt1->bindParam(':password', $param_password, PDO::PARAM_STR);
    $stmt1->execute();

    if ($stmt1) {
        echo "<script>alert(\"Bienvenue vous être inscrits\")</script>";
        header("Location: /php/login.php");
    } else {
        echo "<script>alert(\"Erreur veuillez réeseyer\")</script>";
    }
}



?>