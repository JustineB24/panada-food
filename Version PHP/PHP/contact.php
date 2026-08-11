<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact">
    <title>Panada Food</title>
    <link rel="shortcut icon" type="image/x-icon" alt="Logo restaurant rapide Panada Food"
        href="../Images/Logo_panada_food.ico">
    <link href="../CSS/contact_style.css" media="all" rel="stylesheet" type="text/css">
    <link href="../CSS/index.css" media="all" rel="stylesheet" type="text/css">
    <link href="../CSS/menu_nav.css" media="all" rel="stylesheet" type="text/css">
    <link href="../CSS/footer.css" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_circle_up">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="entete">
        <!-- Titre en haut à gauche -->
        <p id="titreResto">Contact</p>
        <?php include "menu_nav.php"; ?>
    </div>

    <div id="contact">
        <p>Par t&eacute;l&eacute;phone : <a href="tel:0322465339">03 22 46 53 39</a><br>
            Par email : <a href="mailto:panada.food80@gmail.com">panada.food80@gmail.com</a><br>
            Par courrier : 59 boulevard Saint-Quentin, 80000 AMIENS
        </p>
    </div>

    <div id="reseaux">
        <p>Notre Instagram : <a href="https://www.instagram.com/panada__food/">@panada__food</a></p>
        <p>Notre TikTok : <a href="https://www.tiktok.com/@panada.food?lang=fr">@panada.food</a></p>
    </div>

    <div id="formulaireContact">
        <div class="form-card1">
            <div class="form-card2">
                <form class="form" action="traitement.php" method="post">
                    <p class="form-heading">Contactez-nous :</p>

                    <div class="form-field">
                        <input required placeholder="Nom" name="nom" class="input-field" type="text" maxlength="255">
                    </div>

                    <div class="form-field">
                        <input required placeholder="Prénom" name="prenom" class="input-field" type="text" maxlength="255">
                    </div>

                    <div class="form-field">
                        <input required placeholder="Mail" name="mail" class="input-field" type="email"
                            pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                            title="Veuillez entrer une adresse email valide" maxlength="255">
                    </div>

                    <div class="form-field">
                        <input required placeholder="Sujet" name="sujet" class="input-field" type="text" maxlength="255">
                    </div>

                    <div class="form-field">
                        <textarea required placeholder="Message" cols="30" rows="3" name="message" class="input-field"
                            maxlength="1000"></textarea>
                    </div>

                    <button type="submit" class="sendMessage-btn">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
    <script src="../JS/theme.js"></script>
</body>
<!-- Bas de page copyright -->
<footer>
    <?php include "footer.php"; ?>
</footer>

</html>