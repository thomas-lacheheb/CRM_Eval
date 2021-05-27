# CRM_Eval

## Install dependencies
```
$ docker run --rm -w /home/exo -v ${PWD}:/home/exo composer:latest install
```

## Start project
```
$ docker-compose up
```

## Make migrations to run the app
```
$ docker exec -it [id-container-php_fpm] sh
```

In the container
```
$ php bin/console doctrine:migrations:migrate
```