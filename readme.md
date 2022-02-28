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


# Responce

* 200 ok
* 201 created (Post : créer)
* 400 invalid input / bad request
* 404 resource not found
* 422 Unprocessable entity
* 500 Error: Internal Server Error

champ null ne pas le mettre dans le json