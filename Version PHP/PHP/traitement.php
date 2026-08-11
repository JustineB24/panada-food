<?php
require_once 'config.php';

header('Content-Type: application/json');

session_start(); // Protection CSRF
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée.']);
    exit;
}

if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'] ?? '')) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Token CSRF invalide.']);
    exit;
}

try {
    $nom = trim(htmlspecialchars($_POST['nom'], ENT_QUOTES, 'UTF-8'));
    $prenom = trim(htmlspecialchars($_POST['prenom'], ENT_QUOTES, 'UTF-8'));
    $mail = trim(htmlspecialchars($_POST['mail'], ENT_QUOTES, 'UTF-8'));
    $sujet = trim(htmlspecialchars($_POST['sujet'], ENT_QUOTES, 'UTF-8'));
    $message = trim(htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8'));

    if (empty($nom) || empty($prenom) || empty($mail) || empty($sujet) || empty($message)) {
        echo json_encode(['success' => false, 'message' => 'Tous les champs sont obligatoires.']);
        exit;
    }

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => "L'adresse email est invalide."]);
        exit;
    }

    $sql = "INSERT INTO formulaire_contact (nom, prenom, mail, sujet, message) 
            VALUES (:nom, :prenom, :mail, :sujet, :message)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':mail' => $mail,
        ':sujet' => $sujet,
        ':message' => $message
    ]);

    echo json_encode(['success' => true, 'message' => 'Merci pour votre message !']);
} catch (PDOException $e) {
    error_log("Erreur lors de l'enregistrement : " . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Une erreur est survenue.']);
}
?>