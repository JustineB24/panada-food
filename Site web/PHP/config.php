<?php
$host = "localhost"; // Hôte (en local, c'est localhost)
$dbname = "panadafood"; // Nom de la base de données
$username = "root"; // Nom d'utilisateur (par défaut : root)
$password = ""; // Mot de passe (vide pour XAMPP/WAMP)

try {
    // Créer une connexion PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activer les exceptions
} catch (PDOException $e) {
    // Gérer une erreur de connexion
    die("Erreur de connexion : " . $e->getMessage());
}
?>
