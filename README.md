# Panada Food

Site web réalisé pour le restaurant Panada Food, pendant le stage de deuxième année de BTS SIO, en
novembre 2024. Six semaines, **en binôme**, pour un restaurant qui venait d'ouvrir et n'avait
aucune présence en ligne.

Le site a été mis en ligne sur un hébergement OVH, à l'adresse `panadafood.ovh`, sur un domaine que
le restaurant n'a pas renouvelé depuis.

> **Dépôt privé, et il doit le rester par défaut.** Le code a été produit dans le cadre d'un stage
> en entreprise : la question de savoir à qui il appartient n'est pas réglée par le fait de l'avoir
> écrit. Les photos de plats et de la salle ne sont pas non plus forcément à moi. Ne pas publier
> sans l'accord du restaurant.

## Les trois dossiers

**Le site livré est `Site web`.** Les deux autres sont des essais, dont un jamais terminé. Il
n'y avait pas de git à l'époque, donc tout a été conservé côte à côte plutôt que dans un
historique.

| Dossier       | Ce que c'est                                                                                                                                                                                       |
|---------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `Site web`    | **Le vrai site**, celui qui a été rendu. HTML statique, quatre pages (accueil, menu, contact, mentions légales) et un `traitement.php` pour le formulaire de contact.                               |
| `Version PHP` | **Essai jamais terminé, jamais mis en place.** Une reprise des pages en PHP pour ajouter la commande en ligne (`panier.php`, `ajout_panier.php`), avec en-tête et pied factorisés. Abandonné.        |
| `Test`        | Bac à sable, en marge. Contient `spider.html`, un essai d'animation d'araignées qui suivent le pointeur.                                                                                            |

## Base de données

Le site livré ne s'en sert **que pour le formulaire de contact** : `Site web/PHP/traitement.php`
fait un `INSERT INTO formulaire_contact`. La carte, elle, est écrite en dur dans
`Site web/HTML/menu.html`, sans aucune requête.

Le seul dump du dépôt est `Version PHP/panadafood.sql`, donc rangé dans le dossier abandonné. Il
crée cinq tables : `formulaire_contact`, la seule dont le site livré a besoin, et `menu`,
`boissons`, `sauces`, `categorie`, qui devaient alimenter la commande en ligne. Il embarque la carte
du restaurant, information publique. **`formulaire_contact` est vide** : aucun message, aucune
adresse de visiteur dans ce dépôt.

## Lancer en local

**Le site livré** (`Site web`) s'ouvre directement dans un navigateur, c'est du HTML statique. Seul
l'envoi du formulaire de contact demande PHP et MySQL, et la table `formulaire_contact` du dump.

`PHP/config.php` attend `localhost`, l'utilisateur `root` et un mot de passe vide, soit les valeurs
par défaut de XAMPP. Les deux autres dossiers ont chacun leur propre `config.php` avec les mêmes
valeurs.

`Version PHP` demande PHP et MySQL pour tout, puisque ses pages sont en PHP. À lancer seulement pour
voir à quoi ressemblait l'essai de commande en ligne : il n'est pas fini. `Test` est du HTML
statique.

## Points connus

- **Deux mentions légales dans `Site web/HTML/`.** Les autres pages pointent vers
  `mentions_legales.html`. L'autre, `mentions légales.html`, avec un espace et un accent, est plus
  courte et **orpheline** : aucune page n'y renvoie. Même situation pour son CSS,
  `mentions legales_style.css`. Les deux sont conservées telles quelles pour que ce premier commit
  soit une archive fidèle. À supprimer dans un commit suivant si le ménage est souhaité.
- **Espaces dans les noms de dossiers** (`Site web`, `Version PHP`). Sans conséquence tant que le
  projet reste une archive, mais à savoir s'il devait un jour être servi ou scripté.
- **Noms de fichiers accentués**, sur une page et cinq images (`Entrée.JPG`, `Façade_2.JPG`…). Git
  les gère, mais ce sont les seuls chemins qu'il doit échapper. Même remarque que ci-dessus.
