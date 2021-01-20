# Blog
Blog est un application web créée avec Symfony 4. 
Le fichier .sql de la base de donnée "blog_db.sql" se trouve à la racine du projet.

1- Cloner ou télecharger le projet.

2- Lancer à la racine du projet la commande suivante pour lancer le serveur de l'application: php -S 127.0.0.1:8080 -t public

3- Créer ensuite la base de données via à la commande suivante: php bin/console doctrine:database:create

4- Importez la base de données "blog_db.sql" avec la commande: php bin/console doctrine:database:import blog_db.sql

5- Rendez-vous maintenant vers l'url suivant pour accéder à l'application: 127.0.0.1:8080

Remarque: Le système de connexion n'est pas encore tout à fait fini, du coup j'ai mis en commentaire tous les codes les concernant.
