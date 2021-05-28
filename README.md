# CRM_Eval

## Configure environment variables
Create a .env file based on the .env.sample file at the root of the directory
Fill the variables with your settings

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

## To start the tests
```
$ docker run --rm -w /home/exo -v ${PWD}:/home/exo php:latest ./vendor/bin/phpunit tests
```