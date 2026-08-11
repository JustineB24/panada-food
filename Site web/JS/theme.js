// Sélectionnez les éléments
const themeToggleButton = document.getElementById('theme-toggle');
const imageElements = document.querySelectorAll('.image');

// Fonction pour mettre à jour l'image selon le thème
function updateImage() {
    if (document.body.classList.contains('dark-mode')) {
        console.log('Mode sombre activé, changement des images...');
        console.log(imageElements); // Doit afficher l'élément <img> dans la console
        imageElements.forEach((img) => {
            if (img.alt.includes('Icône monnaies et billets')) img.src = '../Images/Argent blanc.png';
            if (img.alt.includes('Icône carte bancaire')) img.src = '../Images/Carte de credit blanc.png';
            if (img.alt.includes('Icône ticket restaurant')) img.src = '../Images/Billet blanc.png';
            if (img.alt.includes('Icône Wi-fi')) img.src = '../Images/Wi Fi blanc.png';
            if (img.alt.includes('Icône Halal')) img.src = '../Images/Halal blanc.png';
            if (img.alt.includes('Icône interdit de fumer')) img.src = '../Images/Non fumeur blanc.png';
        });
    } else {
        imageElements.forEach((img) => {
            if (img.alt.includes('Icône monnaies et billets')) img.src = '../Images/Argent.png';
            if (img.alt.includes('Icône carte bancaire')) img.src = '../Images/Carte de credit.png';
            if (img.alt.includes('Icône ticket restaurant')) img.src = '../Images/Billet.png';
            if (img.alt.includes('Icône Wi-fi')) img.src = '../Images/Wi Fi.png';
            if (img.alt.includes('Icône Halal')) img.src = '../Images/Halal.png';
            if (img.alt.includes('Icône interdit de fumer')) img.src = '../Images/Non fumeur.png';
        });
    }
}

// Charger le thème
document.addEventListener('DOMContentLoaded', () => {
    const isDarkMode = localStorage.getItem('dark-mode') === 'true';
    if (isDarkMode) {
        document.body.classList.add('dark-mode');
        themeToggleButton.textContent = 'Mode Clair';
    }
    updateImage(); // Mettre à jour les images au chargement
});

// Écoutez les clics sur le bouton
themeToggleButton.addEventListener('click', () => {
    // Alterner entre les modes
    document.body.classList.toggle('dark-mode');

    // Mettre à jour le texte du bouton
    if (document.body.classList.contains('dark-mode')) {
        themeToggleButton.textContent = 'Mode Clair';
    } else {
        themeToggleButton.textContent = 'Mode Sombre';
    }

    // Mettre à jour l'image
    updateImage();

    // Sauvegarder le choix dans le stockage local
    const isDarkMode = document.body.classList.contains('dark-mode');
    localStorage.setItem('dark-mode', isDarkMode);
});
