<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Accueil">
    <title>Panada Food</title>
    <link rel="shortcut icon" type="image/x-icon" alt="Logo restaurant rapide Panada Food" href="../Images/Logo_panada_food.ico">
    <link href="../CSS/accueil_style.css" media="all" rel="stylesheet" type="text/css">
    <link href="../CSS/index.css" media="all" rel="stylesheet" type="text/css">
    <link href="../CSS/menu_nav.css" media="all" rel="stylesheet" type="text/css">
    <link href="../CSS/footer.css" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_circle_up">
</head>

<body>
    <div class="entete">
        <!-- Titre en haut à gauche -->
        <p id="titreResto">Accueil</p>
        <?php include "menu_nav.php"; ?>
    </div>

    <div class="header-container">
        <h1>Panada<br><span class="food">Food</span></h1>
        <img id="logo" alt="Logo du restaurant rapide Panada Food" src="../Images/Logo_panada_food.png">
    </div>
    <hr id="separe">

    <main>
        <p>Retrouvez-nous au 59 boulevard de Saint-Quentin &agrave; Amiens (80 000)</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1285.5121298607075!2d2.294135939073043!3d49.87957099287218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e78528a604cf9d%3A0x72781b45878daf0!2sPANADA%20FOOD!5e0!3m2!1sfr!2sfr!4v1732807504190!5m2!1sfr!2sfr"
            allowfullscreen="" loading="lazy"
            alt="Carte de l'emplacement de Panada Food à Amiens">
        </iframe>

        <hr>
        <section id="horaires">
            <h2><u>Horaires :</u></h2>
            <p>
                <strong>Hors vacances :</strong><br>
                Lundi au Vendredi : 10h30 &agrave; 22h30<br>
                Samedi : 11h &agrave; 14h / 18h &agrave; 22h30<br>
                <br><strong>Vacances :</strong><br>
                Lundi au Samedi : 11h &agrave; 14h / 18h &agrave; 22h30
            </p>
        </section>
        <hr>
        <section id="modesPaiement">
            <h2><u>Modes de paiement :</u></h2>
            <div class="flex-container">
                <div class="flex-row">
                    <div class="flex-item">Espèce</div>
                    <div class="flex-item">Carte bancaire <br> (Avec ou sans contact)</div>
                    <div class="flex-item">Ticket restaurant</div>
                    <div class="flex-item">Swile</div>
                </div>
                <div class="flex-row">
                    <div class="flex-item"><img class="image" alt="Icône monnaies et billets" src="../Images/Argent.png"></div>
                    <div class="flex-item"><img class="image" alt="Icône carte bancaire" src="../Images/Carte_de_credit.png"></div>
                    <div class="flex-item"><img class="image" alt="Icône ticket restaurant" src="../Images/Billet.png"></div>
                    <div class="flex-item"><img class="image" alt="Icône Swile" src="../Images/Swile.png"></div>
                </div>
            </div>
        </section>
        <hr>
        <div class="gallery">
            <img class="pouik" alt="Comptoir 1" src="../Images/Comptoir_1.jpg">
            <img class="pouik" alt="Salle 1" src="../Images/Salle_1.jpg">
            <img class="pouik" alt="Comptoir 2" src="../Images/Comptoir_2.jpg">
            <img class="pouik" alt="Salle 2" src="../Images/Salle_2.jpg">
        </div>

        <hr>
        <section id="services">
            <h2><u>Informations pratique :</u></h2>
            <div class="flex-container">
                <div class="flex-row">
                    <div class="flex-item">
                        <img class="image" alt="Icône Wi-fi" src="../Images/Wi-Fi.png">
                    </div>
                    <div class="flex-item">
                        <img class="image" alt="Icône Halal" src="../Images/Halal.png">
                    </div>
                    <div class="flex-item">
                        <img class="image" alt="Icône interdit de fumer" src="../Images/Non-fumeur.png">
                    </div>
                </div>
                <div class="flex-row">
                    <div class="flex-item">Wi-Fi gratuit</div>
                    <div class="flex-item">Halal</div>
                    <div class="flex-item">Non-fumeur</div>
                </div>
            </div>
        </section>

        <a id="lienContact" href="contact.php" class="contactButton">
            Contact
            <div class="iconButton">
                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                        fill="currentColor"></path>
                </svg>
            </div>
        </a>

    </main>
    <script src="../JS/theme.js"></script>
</body>
<!-- Bas de page copyright -->
<footer>
    <?php include "footer.php"; ?>
</footer>

</html>