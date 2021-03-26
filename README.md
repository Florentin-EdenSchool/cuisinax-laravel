**Pour commencer**

Cloner le projet dans un dossier puis rentrer dans ce dossier, ensuite : `composer install`, `composer update` & `npm install`
Base à créer : `base_contrôle_plats_cuisinés`, le nom est celui demandé dans la consigne. Si jamais un problème survient, la base en *.sql* est aussi dans : `public/sql`
Exécuter : `php .\artisan migrate:fresh`

**Choses faites :**

Style responsive et back-office
Enregistrement, connexion avec session Administrative : /admin
Aller dans la BDD, mettre *1* dans la colonne : `is_admin` de l'utilisateur Administrateur
Tous les textes sont traduits en Français
Ajout possible dans la page : `/admin` de l'origine, d'un ingrédient, d'un type de plat, d'un type de nourriture et d'un plat
Suppression de tout ça dans des pages distinctes accessibles depuis le : `/admin`
CSS, SCS, JS opérationnels : `script.js` & `style.scss` dans le : `public/`
Système de mot de passe oublié avec mail fonctionnel
"Requests" personnalisés pour les formulaires

**Chose à faire avec plus de temps**

Recherche
Panier
Image des plats dans : Recherche / Administration
Historique des commandes
Modifier nom des tables, colonnes pour tout mettre en Anglais et plus proprement
Ajouter des controllers pour ne pas tout mettre au même endroit
Rendre le code réutilisable avec des arguments et globaliser les fonctions au lieu de les dupliquer
Pouvoir modifier en plus de supprimer dans les pages de listage puis de pouvoir supprimer plusieurs choses en même temps