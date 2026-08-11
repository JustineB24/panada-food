/* Mode sombre/clair des pages */

// Sélectionne les éléments nécessaires
const toggleSwitch = document.querySelector('.input'); // Le checkbox input
const body = document.body; // Le corps du document
const darkModeClass = 'dark-mode'; // Classe CSS pour le mode sombre
const imageElements = document.querySelectorAll('.image'); // Sélectionne toutes les images avec la classe "image"

// Fonction pour mettre à jour les images selon le thème
function updateImage() {
    if (body.classList.contains('dark-mode')) {
        console.group('Mode sombre activé, mise à jour des images :');
        imageElements.forEach((img) => {
            if (!img.alt) {
                console.warn('Image sans attribut alt détectée:', img);
                return;
            }
            switch (true) {
                case img.alt.includes('Icône monnaies et billets'):
                    img.src = '../Images/Argent_blanc.png';
                    break;
                case img.alt.includes('Icône carte bancaire'):
                    img.src = '../Images/Carte_de_credit_blanc.png';
                    break;
                case img.alt.includes('Icône ticket restaurant'):
                    img.src = '../Images/Billet_blanc.png';
                    break;
                case img.alt.includes('Icône Wi-fi'):
                    img.src = '../Images/Wi-Fi_blanc.png';
                    break;
                case img.alt.includes('Icône Halal'):
                    img.src = '../Images/Halal_blanc.png';
                    break;
                case img.alt.includes('Icône interdit de fumer'):
                    img.src = '../Images/Non-fumeur_blanc.png';
                    break;
                default:
                    console.warn('Alt non reconnu:', img.alt);
            }
        });
        console.groupEnd();
    } else {
        console.group('Mode clair activé, mise à jour des images :');
        imageElements.forEach((img) => {
            if (!img.alt) {
                console.warn('Image sans attribut alt détectée:', img);
                return;
            }
            switch (true) {
                case img.alt.includes('Icône monnaies et billets'):
                    img.src = '../Images/Argent.png';
                    break;
                case img.alt.includes('Icône carte bancaire'):
                    img.src = '../Images/Carte_de_credit.png';
                    break;
                case img.alt.includes('Icône ticket restaurant'):
                    img.src = '../Images/Billet.png';
                    break;
                case img.alt.includes('Icône Wi-fi'):
                    img.src = '../Images/Wi-Fi.png';
                    break;
                case img.alt.includes('Icône Halal'):
                    img.src = '../Images/Halal.png';
                    break;
                case img.alt.includes('Icône interdit de fumer'):
                    img.src = '../Images/Non-fumeur.png';
                    break;
                default:
                    console.warn('Alt non reconnu:', img.alt);
            }
        });
        console.groupEnd();
    }
}

// Fonction pour activer/désactiver le mode sombre
function toggleDarkMode(isDarkMode) {
    if (isDarkMode) {
        body.classList.add(darkModeClass); // Active le mode sombre
    } else {
        body.classList.remove(darkModeClass); // Désactive le mode sombre
    }
    updateImage(); // Mettre à jour les images à chaque changement
}

// Sauvegarde le mode actuel dans localStorage
function saveDarkModePreference(isDarkMode) {
    localStorage.setItem('dark-mode', isDarkMode); // Sauvegarde 'true' ou 'false'
}

// Applique le thème lors du chargement de la page
function loadDarkModePreference() {
    const isDarkMode = localStorage.getItem('dark-mode') === 'true'; // Récupère la préférence
    toggleDarkMode(isDarkMode); // Applique le mode
    toggleSwitch.checked = isDarkMode; // Synchronise l'état du checkbox
}

// Gestionnaire d'événement pour le basculement
toggleSwitch.addEventListener('change', (event) => {
    const isDarkMode = event.target.checked; // Vérifie si le checkbox est activé
    toggleDarkMode(isDarkMode); // Applique le mode correspondant
    saveDarkModePreference(isDarkMode); // Sauvegarde la préférence
});

// Charge les préférences au démarrage
loadDarkModePreference();