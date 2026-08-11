<?php
// Inclure le fichier de configuration pour la connexion à la base de données
require_once 'config.php';

// Vérifier si la requête est bien envoyée en POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer et sécuriser les données du formulaire
    $nom = htmlspecialchars($_POST['nom']); // Champ "Nom"
    $prenom = htmlspecialchars($_POST['prenom']); // Champ "Prénom"
    $mail = htmlspecialchars($_POST['mail']); // Champ "Email"
    $sujet = htmlspecialchars($_POST['sujet']); // Champ "Sujet"
    $message = htmlspecialchars($_POST['message']); // Champ "Message"

    // Validation de l'email
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        echo "L'adresse email est invalide.";
        exit;
    }

    // Préparer la requête SQL pour insérer les données dans la table
    try {
        $sql = "INSERT INTO formulaire_contact (nom, prenom, mail, sujet, message) 
                VALUES (:nom, :prenom, :mail, :sujet, :message)";
        $stmt = $pdo->prepare($sql);

        // Exécuter la requête avec les valeurs récupérées
        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':mail' => $mail,
            ':sujet' => $sujet,
            ':message' => $message
        ]);

        // Message de confirmation
        echo "Votre message a été envoyé avec succès.";
    } catch (PDOException $e) {
        // En cas d'erreur, afficher un message
        echo "Erreur lors de l'enregistrement : " . $e->getMessage();
    }
} else {
    // Si le formulaire n'a pas été envoyé via POST
    echo "Méthode non autorisée.";
}
?>
