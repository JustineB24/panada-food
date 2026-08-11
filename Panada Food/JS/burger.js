/* Menu burger */

// Sélection des éléments
const sideMenu = document.querySelector('.ticket'); // Le conteneur complet (ticket + menu)
const iconMenu = document.querySelector('.icon-menu'); // Icône du menu burger
const html = document.documentElement; // Utilisation de <html> pour appliquer le défilement

// Gestion du clic sur l'icône menu (ouvrir/fermer le menu)
iconMenu.addEventListener('click', function () {
    sideMenu.classList.toggle('open'); // Basculer l'état du menu
    html.style.overflow = sideMenu.classList.contains('open') ? 'hidden' : ''; // Gérer le défilement
});