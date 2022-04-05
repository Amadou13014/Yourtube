
    <?php

    $serveurname = '127.0.1.1';
    $username = 'root';
    $pwd = 'Azerty@13014';


    try {
        $db = new PDO("mysql:host=$serveurname;dbname=yourtub;", $username, $pwd);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }


    ?>
