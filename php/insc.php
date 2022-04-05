<?php require_once "../header/header.php" ?>
<?php require_once "../phpback/inscback.php" ?>

<body>
    <div class="color_inscription">
        <form action="../phpback/inscback.php" method="post">
            <div class="container_inscription">
                <div class="color_carre_inscription">
                    <div class="title_inscription_co">Bienvenue</div>
                    <div class="title2_inscription_co">Veuillez vous crée votre compte</div>
                    <div class="input_container_inscription_co ic2">
                        <input name="nom" class="input_inscription_co" type="text" placeholder=" Nom" />

                    </div>

                    <div class="input_container_inscription_co ic2">
                        <input name="prenom" class="input_inscription_co" type="text" placeholder="Prenom" />

                    </div>
                    <div class="input_container_inscription_co ic2">
                        <input name="pseudo" class="input_inscription_co" type="text" placeholder=" Pseudo" />

                    </div>

                    <div class="input_container_inscription_co ic2">
                        <input name="email" class="input_inscription_co" type="email" placeholder="Email" />
                    </div>

                    <div class="input_container_inscription_co ic2">
                        <input name="password" class="input_inscription_co" type="password" placeholder=" Password" />
                        <div class="link_connexion"><a href="login.php">Connexion</a></div>
                    </div>


                    <button type="submit" class="submit_inscription" name="submit4">Inscription</button>
                </div>


            </div>
        </form>
        <script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
    </div>
</body>

</html>