## Laravel 8 Docker-compose Skeleton

### Containers:
* PHP-FPM 7.2
* NGINX ALPINE
* POSTGRES 11

### Laravel version 8.4

### Init project

* Rodar composer install dentro do container php-fpm
* Configurar .env
* Generate APP KEY `php artisan key:generate`
* Set JWT Token `php artisan jwt:secret`