
<?php

$recherche = $db->prepare("SELECT titre FROM post ORDER BY id_post DESC");

if (isset($_GET['search']) and !empty($_GET['search'])) {
    $search = htmlspecialchars($_GET['search']);
    $recherche = $db->query("SELECT titre FROM post WHERE titre LIKE "%'.$search.'%" ORDER BY id_post DESC");
    $recherche->execute();
}
?>