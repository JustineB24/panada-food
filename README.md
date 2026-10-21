# Panada Food

Site web réalisé pour le restaurant Panada Food, pendant le stage de deuxième année de BTS SIO, en
novembre et décembre 2024. Six semaines, **en binôme**, pour un restaurant qui venait d'ouvrir et
n'avait aucune présence en ligne.

Le site a été mis en ligne sur un hébergement OVH, à l'adresse `panadafood.ovh`, sur un domaine que
le restaurant n'a pas renouvelé depuis.

> **Droits.** Les photos (plats, comptoir, salle), la carte, le logo et l'identité visuelle
> appartiennent au restaurant Panada Food. Ils figurent ici uniquement pour montrer le site tel qu'il
> a été livré et ne sont pas réutilisables.

## Les quatre dossiers

**Le site livré est `Panada Food`.** Les trois autres sont des états antérieurs, dont un essai
abandonné. Il n'y avait pas de git à l'époque, donc tout a été conservé côte à côte plutôt que dans
un historique.

| Dossier       | Ce que c'est                                                                                                                                                                                   |
|---------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `Panada Food` | **Le site livré**, celui qui a tourné en ligne. Cinq pages, statique. Voir le détail plus bas.                                                                                                 |
| `Site web`    | État antérieur du même site vitrine, sans écran de chargement ni bascule de thème. Quatre pages, et un formulaire de contact qui passait par PHP et MySQL.                                     |
| `Version PHP` | **Essai jamais terminé, jamais mis en place.** Une reprise des pages en PHP pour ajouter la commande en ligne (`panier.php`, `ajout_panier.php`). Abandonné, le site livré est resté statique. |
| `Test`        | Bac à sable, en marge. Contient `spider.html`, un essai d'animation d'araignées qui suivent le pointeur.                                                                                       |

## Le site livré

Cinq pages dans `Panada Food/HTML/` : `index.html` qui est l'écran de chargement, puis `accueil`,
`menu`, `contact` et `mentions_legales`.

- **Aucune base de données.** Le formulaire de contact ouvre un `mailto:` vers l'adresse du
  restaurant. C'est pour cela qu'aucun dump SQL n'accompagne ce dossier.
- **Cinq scripts** : `loader.js` (écran de chargement), `theme.js` (bascule clair / sombre),
  `burger.js` (menu mobile), `zoom.js` (agrandissement des images), `cookies.js` (bandeau de
  consentement).
- **Huit feuilles de style**, une par page plus `footer.css` et `menu_nav.css`.
- **37 images** : photos du comptoir et de la salle, visuels des catégories (burgers, tacos, pizzas,
  sandwichs), pictogrammes de services (halal, Wi-Fi, non-fumeur, moyens de paiement), QR code
  d'avis Google, la carte en PDF et la palette de couleurs du restaurant.

**Dépendances externes, à connaître** : le site appelle Google Fonts (Permanent Marker, Rubik Mono
One, Material Symbols) et `cdn.brandfetch.io` pour deux logos. Il ne fonctionne donc pas
entièrement hors ligne.

## La base de données des états antérieurs

`Site web` et `Version PHP` utilisaient MySQL, le site livré non.

Le seul dump du dépôt est `Version PHP/panadafood.sql`. Il crée cinq tables :
`formulaire_contact`, celle dont `Site web` avait besoin, et `menu`, `boissons`, `sauces`,
`categorie`, qui devaient alimenter la commande en ligne. Il embarque la carte du restaurant,
information publique. **`formulaire_contact` est vide** : aucun message, aucune adresse de visiteur
dans ce dépôt.

## Lancer en local

**Le site livré** (`Panada Food`) s'ouvre directement dans un navigateur, en commençant par
`HTML/index.html`. C'est du statique, aucun serveur nécessaire. Il lui faut une connexion pour les
polices et les deux logos distants, sinon ils tombent en repli.

`Site web` s'ouvre aussi directement, sauf l'envoi du formulaire de contact, qui demande PHP, MySQL
et la table `formulaire_contact` du dump. `Version PHP` demande PHP et MySQL pour tout, ses pages
étant en PHP. À lancer seulement pour voir à quoi ressemblait l'essai de commande en ligne, il
n'est pas fini. `Test` est du HTML statique.

Les `config.php` de `Site web` et `Version PHP` attendent `localhost`, l'utilisateur `root` et un
mot de passe vide, soit les valeurs par défaut de XAMPP. Aucun identifiant réel n'est dans ce dépôt.
