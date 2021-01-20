# Blog
Blog est un application web créée avec Symfony 4. 
Le fichier .sql de la base de donnée "blog_db.sql" se trouve à la racine du projet.

1- Cloner ou télecharger le projet.
2- Lancer à la racine du projet la commande suivante pour lancer le serveur de l'application: php -S 127.0.0.1:8080 -t public
4- Créer ensuite la base de données via à la commande suivante: php bin/console doctrine:database:create
5- Importez la base de données "blog_db.sql" avec la commande: php bin/console doctrine:database:import gestion_utilisateur_db.sql
6- Rendez-vous maintenant vers l'url suivant pour accéder à l'application: 127.0.0.1:8080
