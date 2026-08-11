// Fonction pour afficher le loader
function showLoader() {
    const loader = document.getElementById('loader');
    if (loader) {
        loader.style.display = 'flex'; // Affiche le loader
    }
}

// Fonction pour masquer le loader
function hideLoader() {
    const loader = document.getElementById('loader');
    const content = document.getElementById('content');

    if (loader) {
        loader.style.display = 'none'; // Cache le loader
    }

    if (content) {
        content.classList.remove('hidden'); // Affiche le contenu principal
        content.style.opacity = '1'; // Transition fluide
    }
}

// Simuler un chargement au chargement de la page
document.addEventListener('DOMContentLoaded', () => {
    showLoader(); // Affiche le loader

    // Simule un délai avant d'afficher le contenu principal
    setTimeout(() => {
        hideLoader(); // Masque le loader
        window.location.href = "accueil.php"; // Redirige vers la page principale
    }, 3000); // Délai de 3 secondes
});
