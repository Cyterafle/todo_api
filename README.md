# API Todo

API Todo en PHP/Symfony

## Pré-requis

Veillez à avoir composer d'installé pour les différentes dépendances\

Sinon [cliquer ici](https://getcomposer.org/download/) pour les instructions d'installation



### Dépendances utiisées

Liste des dépendances utilisées :
- symfony/maker-bundle
- orm-fixtures
- req api
- symfony/validator

### La base de données

Il faudra renseigner le moyen d'accès au [fichier d'environnement du projet](.env)

#### A modifier dans le fichier d'environnement
Les bases de données sont présentées de cette manière (exemple avec MariaDB/mySQL qui m'a servi de test mais cela est aussi vrai pour PostgreSQL) :\
```DATABASE_URL="mysql://user:password@127.0.0.1:3306/database?serverVersion=10.11.6-MariaDB&charset=utf8mb4"```\
Paramètres à changer :
- User => Remplacer par le nom d'utilisateur pour accéder à la base de données
- Password => Remplacer par le mot de passe pour accéder à la base de données
- database => Remplacer par le nom de la base de données associée au projet

## Pour démarrer le serveur

Ecrivez simplement en étant dans le répertoire de l'API
```symfony server:start```