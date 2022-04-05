<?php require_once "config.php" ?>
<?php

if (isset($_POST['submitcontact'])) {
    $message = $_POST['messagemsg'];
    $email = $_POST['emailmsg'];

    $msg = $db->prepare ("INSERT INTO contact(email, message) VALUES (:email, :message )");
    $msg->bindParam(':email', $email, PDO::PARAM_STR);
    $msg->bindParam(':message', $message, PDO::PARAM_STR);
    $msg->execute();

    if ($msg) {
        echo "<script>alert(\"Votre message a bien était envoyté\")</script>";
    } else {
        echo "<script>alert(\"Erreur veuillez réeseyer\")</script>";
    }
}













?>
