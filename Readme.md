
### IDE

- php 7.4
- symfony 5.4.9
- git
- node.js

### Exercice
---
- Installer un projet Symfony : Progica
- Mettre en place les premières pages (Controller/Route)
- Mettre en place la base de donnée : Progica (Config) DOCTRINE
- Créer les entités; Property, Option, PropertySearch, Contact, User
- Gérer les options (table de relation manyToMany)
- Création de formumlaires: make:form
     - pour la création de gites
     - pour la création d"options
- Ralation OneToMyny entre User et Gites
- Créer un compte via l'application avec make:registration form
- Créer une page de profil pour les utilisateurs (ROLE_USER)

- Créer une page admin (ROLE_ADMIN)
- Ajouter/Supprimer/Editer  les gites / les options via l'apppication (EntityManager)


- Créer une partie administrateur avec make:user et make:auth en cryptant le mot de passe

- Mettre en place les contraintes de Validation pour les formulaires
- Mettre en place un système de pagination pour tous les Gites
- Mettre en place un formulaire de recherche de gîte avec la possibilité de rechercher
     - Par surface min
     - Par Prix maximun
     - PAr nombre de couchages
     - Par Options
- Mettre en place un formulaire de contact avec Maildev

### librairies installées

- paginator
- slugify
- vich : insertion et télechargement des images
- sweet alert 2 pour les l'affichage des options


### Utilisateurs
role admin : admin mdp: admin
création d'un compte user via l'application



