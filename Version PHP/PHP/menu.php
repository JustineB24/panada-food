<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Menu">
    <title>Panada Food</title>
    <link rel="shortcut icon" type="image/x-icon" alt="Logo restaurant rapide Panada Food"
        href="../Images/Logo_panada_food.ico">
    <link href="../CSS/menu_style.css" media="all" rel="stylesheet" type="text/css">
    <link href="../CSS/index.css" media="all" rel="stylesheet" type="text/css">
    <link href="../CSS/menu_nav.css" media="all" rel="stylesheet" type="text/css">
    <link href="../CSS/footer.css" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_circle_up">
</head>

<body>
    <div class="entete">
        <!-- Titre en haut à gauche -->
        <p id="titreResto">Menu</p>
        <?php include "menu_nav.php"; ?>
    </div>
    <br>
    <img id="facade" alt="Facade du restaurant" src="../Images/Entrée_resto.png">
    <!-- <img width="100px" height="100px" alt="Pizza" src="../Images/Pizza.jpeg"> -->

    <?php
    include 'config.php';
    // Requête avec jointure et tri par ordre
    $query = $pdo->query("SELECT menu.*, categorie.nom AS categorie_nom, categorie.ordre
                          FROM menu
                          JOIN categorie ON menu.categorie = categorie.id
                          ORDER BY categorie.ordre, categorie.nom;");
    $categories = [];
    $produits = $query->fetchAll(PDO::FETCH_ASSOC);

    // Organiser les produits par catégorie
    foreach ($produits as $produit) {
        $categories[$produit['categorie_nom']][] = $produit;
    }
    ?>

    <div class="master-container">
        <?php foreach ($categories as $categorie => $produits): ?>
            <div class="card cart">
                <label class="title"><?= htmlspecialchars($categorie) ?></label>
                <div class="products">
                    <?php foreach ($produits as $produit): ?>
                        <div class="product">
                            <!-- Image (facultatif) -->
                            <!-- <img src="../Images/<?= htmlspecialchars($produit['image']) ?>" alt="<?= htmlspecialchars($produit['nom']) ?>" width="60" height="60"> -->
                            <div class="product-info">
                                <span class="product-name"><?= htmlspecialchars($produit['nom']) ?></span>
                                <p class="product-description"><?= htmlspecialchars($produit['description']) ?></p>
                                <label class="product-price"><?= number_format($produit['prix'], 2) ?> €</label>
                            </div>

                            <button class="add-to-cart button" data-id="<?= $produit['id'] ?>"
                                data-nom="<?= htmlspecialchars($produit['nom']) ?>"
                                data-prix="<?= $produit['prix'] ?>">
                                <div class="button-wrapper">
                                    <div class="text">Ajouter au panier</div>
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart2"
                                            viewBox="0 0 16 16">
                                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                                        </svg>
                                    </span>
                                </div>
                            </button>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- <div class="button">
        <div class="button-wrapper">
            <div class="text">Ajouter au panier</div>
            <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart2"
                    viewBox="0 0 16 16">
                    <path
                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                    </path>
                </svg>
            </span>
        </div>
    </div> -->

    <script src="../JS/theme.js"></script>
</body>
<!-- Bas de page copyright -->
<footer>
    <?php include "footer.php"; ?>
</footer>

</html>