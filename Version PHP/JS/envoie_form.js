document.querySelector('form').addEventListener('submit', async function (event) {
    event.preventDefault(); // Empêche l'envoi par défaut

    const formData = new FormData(this);

    try {
        // Afficher un spinner pendant le traitement
        Swal.fire({
            title: 'Envoi en cours...',
            text: 'Veuillez patienter.',
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            },
        });

        const response = await fetch(this.action, {
            method: this.method,
            body: formData,
        });
        const result = await response.json();

        if (result.success) {
            Swal.fire({
                icon: 'success',
                title: 'Merci !',
                text: result.message,
            }).then(() => {
                this.reset(); // Réinitialise le formulaire après succès
                window.location.href = 'contact.php'; // Redirection après succès
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: result.message,
            });
        }
    } catch (error) {
        console.error('Erreur réseau ou serveur :', error);
        Swal.fire({
            icon: 'error',
            title: 'Erreur réseau',
            text: 'Impossible de contacter le serveur. Vérifiez votre connexion et réessayez.',
        });
    }
});
