<?php
session_start();

if (!isset($_SESSION['panier']) || empty($_SESSION['panier'])) {
    echo "Votre panier est vide.";
} else {
    echo "<h1>Panier</h1>";
    foreach ($_SESSION['panier'] as $produit) {
        echo "<p>{$produit['nom']} - {$produit['quantite']} x " . number_format($produit['prix'], 2, '.', '') . " €</p>";
    }

    // Calcul et affichage du total avec 2 décimales
    $total = array_reduce($_SESSION['panier'], function ($total, $item) {
        return $total + ($item['quantite'] * $item['prix']);
    }, 0);
    
    echo "<p><strong>Total : " . number_format($total, 2, '.', '') . " €</strong></p>";
}
?>
