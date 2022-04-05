<?php require_once "config.php";


$sql1 = $db->query("SELECT * FROM post LEFT JOIN type ON post.id_type = type.id_type");