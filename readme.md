## evaluation SQL - PHP

1. structure fichiers sous VS Code
    1. dossier config :
        1. requetes.sql : contient le code SQL utilisé
        2. db.php : connexion à la base de données
        3. fonctions.php : fonctions utilisées dans les fichiers php
    2. dossier partials : fichiers communs aux pages html
        1. head.php : entête
        2. navbar.php : menu de navigation en haut de page
        3. footer.php : pied de page
        4. scripts.php : ensemble des balises <script>
    3. dossier assets : 
        1. js/scripts.js : fichier de code javascript
        2. css/styles.css : feuilles de styles en css
        3. img : dossier des images

2. Création de la base de données "immobilier"
Création de la table : logement
voir le fichier requetes.sql

3. Enregistrement des données
Formulaire de création de logement : voir le fichier "create.php"

4. Affichage des données
Page d’affichage des données saisies : voir le fichier "liste.php"

5. Développements complémentaires
Les fichiers uploadés via le champ photo sont renommés sous la forme "logement_(timestamp).jpg : voir la fonction "uploadPhoto" utilisée lors de la création des données.
Affichage d'un logement spécifique en passant son id dans l'url : voir le fichier "show.php"

6. Fichier de départ : accueil.php
