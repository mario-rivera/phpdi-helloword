# Hello World with Dependency Injection

Uses [php-di](http://php-di.org/) to inject dependencies.

## Usage with docker-compose

*To install composer packages: (the user id variable is to avoid running as root on linux)*
```bash
CURRENT_UID=$(id -u):$(id -g) docker-compose run --rm composer
```

*To run the application*
```bash
docker-compose run --rm php
```

*To remove the network created by docker-compose*
```bash
docker-compose down
```

## Usage with docker commands

*To install composer packages: (the user id variable is to avoid running as root on linux)*

```bash
docker run --rm -it \
--volume $PWD:/app \
--user $(id -u):$(id -g) \
composer:1.6 install
```

*To run the application*

```bash
docker run --rm -it \
--volume $PWD:/app \
php:7.2-cli-alpine php /app/index.php
```

## License
[MIT](https://choosealicense.com/licenses/mit/)