<?php
session_start();

if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = []; // Initialise un panier vide
}

if (isset($_POST['id'], $_POST['nom'], $_POST['prix'])) {
    // Assurez-vous que le prix est une valeur décimale avec 2 chiffres après la virgule
    $produit = [
        'id' => $_POST['id'],
        'nom' => $_POST['nom'],
        'prix' => number_format((float)$_POST['prix'], 2, '.', ''), // Formatage avec 2 décimales
        'quantite' => 1
    ];

    // Vérifier si le produit est déjà dans le panier
    $existe = false;
    foreach ($_SESSION['panier'] as &$item) {
        if ($item['id'] === $produit['id']) {
            $item['quantite']++; // Augmente la quantité si déjà présent
            $existe = true;
            break;
        }
    }
    unset($item);

    // Si le produit n'existe pas, on l'ajoute
    if (!$existe) {
        $_SESSION['panier'][] = $produit;
    }

    echo json_encode(['success' => true, 'message' => 'Produit ajouté au panier']);
} else {
    echo json_encode(['success' => false, 'message' => 'Paramètres invalides']);
}
?>