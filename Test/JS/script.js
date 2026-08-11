// Sélectionnez le bouton
const themeToggleButton = document.getElementById('theme-toggle');

// Écoutez les clics sur le bouton
themeToggleButton.addEventListener('click', () => {
    // Ajoute ou enlève la classe 'dark-mode' au body
    document.body.classList.toggle('dark-mode');

    // Change le texte du bouton selon le mode
    if (document.body.classList.contains('dark-mode')) {
        themeToggleButton.textContent = 'Mode Clair';
    } else {
        themeToggleButton.textContent = 'Mode Sombre';
    }
});

// Charger le thème au démarrage
document.addEventListener('DOMContentLoaded', () => {
    const isDarkMode = localStorage.getItem('dark-mode') === 'true';
    if (isDarkMode) {
        document.body.classList.add('dark-mode');
        themeToggleButton.textContent = 'Mode Clair';
    }
});

// Sauvegarder le thème dans le stockage local
themeToggleButton.addEventListener('click', () => {
    const isDarkMode = document.body.classList.contains('dark-mode');
    localStorage.setItem('dark-mode', isDarkMode);
});