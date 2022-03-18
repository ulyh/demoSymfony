# demo-symfony

application web développée en symfony 5

# installation

## prerequis

- php >=7.2.5
- composer
- symfony

## .env

vérifier et éventuellement modifier les identifiants de la base de données :

- DATABASE_URL="mysql://{nom d'utilisateur}:{mot de passe}@127.0.0.1:3306/{nom de la base}"

## Commandes à exécuter:

- composer install
- php bin\console doctrine:database:create
- php bin\console doctrine:migration:migrate
- php bin\console doctrine:fixtures:load
- symfony serve
