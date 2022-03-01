# Hello mariage

Site Api et back-office pour présenter des thème de mariage

## Environement de développement

### Pré-requis

* PHP 8.0
* Composer
* Docker
* Docker-compose

### Lancer l'enviroment de developpement
```bash
docker-compose up -d
```

### Lancer la compilation des assets

```bash
docker exec -it www_docker_php8_mariage_test /bin/bash
npm run dev
```

### fixtures
composer require --dev orm-fixtures

php bin/console doctrine:fixtures:load --env=test

### Lancer les test (dns le container)
```bash

php ./vendor/bin/phpunit --verbose
```

# En plus 
# Responce

* 200 ok
* 201 created (Post : créer)
* 400 invalid input / bad request
* 404 resource not found
* 422 Unprocessable entity (l'entité n'as pu être traité) key "violations : ["propertyPath" => "", "message" => "", "code" => "" ]
* 500 Error: Internal Server Error

champ null ne pas le mettre dans le json

Soit pull request pour les devoirs
Soit on push les features au lead
Les des push leurs features sur le dépôt pas de CI
Les Lead merge les features dans la branche DEV et push sur le dépôt => CI pour valider l’ensemble les tests sont verts => On peut récupérer le code et continuer pour chaque équipe


rm data/database.sqlite
touch data/database.sqlite
php bin/console doctrine:schema:update --force --env=test
php bin/console doctrine:fixtures:load --env=test
php ./vendor/bin/phpunit --verbose


symfony.yaml de github

php bin/console doctrine:fixtures:load --no-interaction --env=test

