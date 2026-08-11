/* Pop-up des cookies */
document.addEventListener("DOMContentLoaded", function () {
    const popup = document.getElementById("cookiePopup");
    const closeButton = document.getElementById("closePopup");

    // Vérifie si le pop-up a déjà été fermé
    const popupClosed = localStorage.getItem("popupClosed");

    if (!popupClosed) {
        // Si le pop-up n'a jamais été fermé, l'afficher
        setTimeout(() => {
            popup.classList.add("show");
        }, 500); // Affiche après 500ms
    }

    // Ajoute un événement au bouton pour fermer le pop-up
    closeButton.addEventListener("click", function () {
        popup.classList.remove("show");
        // Enregistre dans le localStorage que le pop-up a été fermé
        localStorage.setItem("popupClosed", "true");
    });
});