<?php require_once "config.php" ?>
<?php session_start() ?>
<?php

if (isset($_POST['submit4'])) {

    if ($_POST['pseudo'] != "" || $_POST['email'] != "" || isset($_POST['password'])) {
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $stmt = $db->prepare("SELECT * FROM user WHERE email=? || pseudo=?");
        $stmt->execute(array($email, $pseudo));
        $count = $stmt->rowCount();
        $user = $stmt->fetch();


        if ($count > 0) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['id_user'] = $user["id_user"];
                $_SESSION['email'] = $email;
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['prenom'] = $user["prenom"];
                $_SESSION['nom'] = $user["nom"];

                header("location: ../php/acceuil.php");
            } else {
                echo "
     				<script>alert('Invalid username or password')</script>
     				<script>window.location = '../php/login.php'</script>
     				";
            }
        } else {
            echo "
            			<script>alert('Please complete the required field!')</script>
        				<script>window.location = '../php/login.php'</script>
            	";
        }
    }
}

// $recupinfo = $db->prepare("SELECT prenom, nom FROM user WHERE id_user= :id_user");
// $recupinfo->bindParam(':id_user', $_SESSION["id_user"]);
// $recupinfo->bindParam(':prenom', $prenom, PDO::PARAM_STR);
// $recupinfo->bindParam(':nom', $nom, PDO::PARAM_STR);
// $recupinfo->execute();
// $nom = $_POST['nom'];
// $prenom = $_POST['prenom'];
// $_SESSION['nom'] = $nom;
// $_SESSION['prenom'] = $prenom;



?>