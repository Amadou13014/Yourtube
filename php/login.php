<?php require_once "../header/header.php" ?>
<?php require_once "../phpback/loginback.php" ?>

<body>
    <form action="../phpback/loginback.php" method="post">
        <div class="container_connexion">
            <div class="container2_connexion">
                <div class="title_inscription_co">Bienvenue</div>
                <div class="title2_inscription_co">Veuillez vous crée votre compte</div>
                <div class="input_container_inscription_co ic2">
                    <input name="pseudo" class="input_connexion" type="text" placeholder="Pseudo"/>

                </div>

                <div class="input_container_inscription_co ic2">
                    <input name="email" class="input_connexion" type="email" placeholder="Email" />
                </div>

                <div class="input_container_inscription_co ic2">
                    <input name="password" class="input_connexion" type="password" placeholder=" Password" />

                    <div class="linkco"><a href="insc.php">Inscription</a></div>
                </div>


                <button type="submit" class="submit_connexion" name="submit4">Connexion</button>
            </div>


        </div>
    </form>
    <script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
</body>

</html>